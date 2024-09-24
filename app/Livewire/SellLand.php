<?php

namespace App\Livewire;

use App\Models\Type;
use App\Models\Image;
use Livewire\Component;
use App\Models\LandRecords;
use Livewire\WithFileUploads;

class SellLand extends Component
{

    use WithFileUploads;

    public $showForm = true;
    public $editMode = false;

    public $name, $address, $nationality, $occupation, $block_no, $plot_no, $plot_size, $occupancy_no, $price, $receipt_url, $land_type_id, $additional_info;
    public $images = []; // To store multiple images

    public $landRecords;
    public $landId;

    public function mount()
    {
        $this->landRecords = LandRecords::all();
    }

    protected $rules = [
        'name' => 'required|string',
        'address' => 'required|string',
        'nationality' => 'required|string',
        'occupation' => 'required|string',
        'block_no' => 'required|string',
        'plot_no' => 'required|string|unique:land_records',
        'plot_size' => 'required|string',
        'occupancy_no' => 'required|string',
        'price' => 'required|numeric',
        'land_type_id' => 'required|exists:types,id',
        'receipt_url' => 'required|mimes:jpeg,png,jpg,pdf|max:2048',
        'additional_info' => 'nullable|string',
        'images.*' => 'image|max:2048', // Validate each image

    ];

    public function toggleForm()
    {
        $this->showForm = !$this->showForm;
    }

    public function submitForm()
    {
        // Validate the inputs
        $validatedData = $this->validate();

        // Store the uploaded file and get the path
        $receiptPath = $this->receipt_url->store('receipts', 'public');

        // Save the land record
        $landRecord = LandRecords::create([
            'name' => $this->name,
            'address' => $this->address,
            'nationality' => $this->nationality,
            'occupation' => $this->occupation,
            'block_no' => $this->block_no,
            'plot_no' => $this->plot_no,
            'plot_size' => $this->plot_size,
            'occupancy_no' => $this->occupancy_no,
            'price' => $this->price,
            'receipt_url' => $receiptPath,
            'land_type_id' => $this->land_type_id,
            'additional_info' => $this->additional_info,
            'user_id' => auth()->user()->id,
        ]);

        // Save each image and associate with the land record
        foreach ($this->images as $image) {
            $imagePath = $image->store('land_images', 'public');
            Image::create([
                'land_record_id' => $landRecord->id,
                'image_url' => $imagePath,
            ]);
        }

        // Clear form fields
        $this->resetForm();
        session()->flash('message', 'Land record submitted successfully.');
        $this->toggleForm(); // Show the table after submission
    }

    public function resetForm()
    {
        $this->name = '';
        $this->address = '';
        $this->nationality = '';
        $this->occupation = '';
        $this->block_no = '';
        $this->plot_no = '';
        $this->plot_size = '';
        $this->occupancy_no = '';
        $this->price = '';
        $this->receipt_url = '';
        $this->land_type_id = '';
        $this->additional_info = '';
        $this->images = [];

    }


    public function editLand($id)
    {
        $this->editMode = true;
        $this->showForm = true;

        $land = LandRecords::findOrFail($id);
        $this->landId = $land->id;
        $this->name = $land->name;
        $this->address = $land->address;
        $this->nationality = $land->nationality;
        $this->occupation = $land->occupation;
        $this->block_no = $land->block_no;
        $this->plot_no = $land->plot_no;
        $this->plot_size = $land->plot_size;
        $this->occupancy_no = $land->occupancy_no;
        $this->price = $land->price;
        $this->land_type_id = $land->land_type_id;
        $this->receipt_url = $land->receipt_url;
        $this->additional_info = $land->additional_info;
        // Add other fields like receipt_url, images, additional_info, etc.
    }


    public function updateLand()
    {
        // Validate the data including conditional receipt_url validation
        $validatedData = $this->validate([
            'name' => 'required',
            'address' => 'required',
            'nationality' => 'required',
            'occupation' => 'required',
            'block_no' => 'required',
            'plot_no' => 'required',
            'plot_size' => 'required',
            'occupancy_no' => 'required',
            'price' => 'required|numeric',
            'images.*' => 'image|max:2048', // Validate images
            'receipt_url' => $this->receipt_url ? 'mimes:jpeg,png,jpg,pdf|max:2048' : 'nullable', // Conditional receipt validation
        ]);

        $land = LandRecords::findOrFail($this->landId);

        // Handle receipt upload (use old receipt if not uploaded)
        if ($this->receipt_url) {
            $receiptPath = $this->receipt_url->store('receipts', 'public'); // Store new receipt
        } else {
            $receiptPath = $land->receipt_url; // Keep old receipt
        }

        // Update the land record
        $land->update([
            'name' => $this->name,
            'address' => $this->address,
            'nationality' => $this->nationality,
            'occupation' => $this->occupation,
            'block_no' => $this->block_no,
            'plot_no' => $this->plot_no,
            'plot_size' => $this->plot_size,
            'occupancy_no' => $this->occupancy_no,
            'price' => $this->price,
            'receipt_url' => $receiptPath,
            'additional_info' => $this->additional_info,
            'land_type_id' => $this->land_type_id,
        ]);

        // Handle new images
        if (!empty($this->images)) {
            foreach ($this->images as $image) {
                $imagePath = $image->store('land_images', 'public');
                Image::create([
                    'land_record_id' => $land->id, // Associate with the updated land record
                    'image_url' => $imagePath,
                ]);
            }
        }
        $this->resetForm();
        $this->landRecords = LandRecords::all();
        $this->showForm = false;
    }

    // Method to delete a land record
    public function deleteLand($id)
    {
        LandRecords::findOrFail($id)->delete();
        $this->landRecords = LandRecords::all(); // Refresh the list after deletion
    }

    public function render()
    {
        $landRecords = LandRecords::all();
        $landtypes = Type::all();
        return view('livewire.sell-land', ['landRecords' => $landRecords, 'landtypes' => $landtypes]);
    }
}
