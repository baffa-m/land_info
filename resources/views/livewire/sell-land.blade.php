<div>
    {{-- Success is as dangerous as failure. --}}

    <!-- Hero Start -->
    <section class="bg-half-170 d-table w-100" style="background: url('assets/images/real/1.jpg') center;">
        <div class="bg-overlay bg-black opacity-7"></div>
        <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col-lg-12 text-center">
                    <div class="pages-heading title-heading">
                        <h2 class="text-white title-dark mb-0"> Sell Your Land Fast and Efficiently </h2>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div> <!--end container-->
    </section><!--end section-->
    <div class="position-relative">
        <div class="shape overflow-hidden text-color-white">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- Hero End -->

    <!-- Start -->
    <section class="section px-32">
        <div>
            <div class="container">
                <!-- Toggle Button -->
                <button wire:click="toggleForm" class="btn btn-primary mb-3">
                    {{ $showForm ? 'Show Submitted Lands' : 'Add New Land Record' }}
                </button>

                <!-- Show Form or Table Based on Toggle -->
                @if ($showForm)
                    <!-- Land Submission Form -->
                    <section class="section px-32">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Name <span class="text-danger">*</span></label>
                                        <input wire:model="name" type="text" class="form-control" placeholder="Enter name">
                                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Address <span class="text-danger">*</span></label>
                                        <input wire:model="address" type="text" class="form-control" placeholder="Enter address">
                                        @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Nationality <span class="text-danger">*</span></label>
                                        <input wire:model="nationality" type="text" class="form-control" placeholder="Enter nationality">
                                        @error('nationality') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Occupation <span class="text-danger">*</span></label>
                                        <input wire:model="occupation" type="text" class="form-control" placeholder="Enter occupation">
                                        @error('occupation') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">House Number <span class="text-danger">*</span></label>
                                        <input wire:model="block_no" type="text" class="form-control" placeholder="Enter block number">
                                        @error('block_no') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Plot Number <span class="text-danger">*</span></label>
                                        <input wire:model="plot_no" type="text" class="form-control" placeholder="Enter plot number">
                                        @error('plot_no') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Plot Size <span class="text-danger">*</span></label>
                                        <input wire:model="plot_size" type="text" class="form-control" placeholder="Enter plot size">
                                        @error('plot_size') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Occupancy Number <span class="text-danger">*</span></label>
                                        <input wire:model="occupancy_no" type="text" class="form-control" placeholder="Enter occupancy number">
                                        @error('occupancy_no') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Price <span class="text-danger">*</span></label>
                                        <input wire:model="price" type="number" class="form-control" placeholder="Enter price">
                                        @error('price') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Receipt <span class="text-danger">*</span></label>
                                        <input wire:model="receipt_url" type="file" class="form-control" placeholder="Upload">
                                        @error('receipt_url') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Land Use <span class="text-danger">*</span></label>
                                        <select wire:model="land_type_id" class="form-control" name="land_type_id" id="">
                                            <option value="">Select Land Use Type...</option>
                                            @foreach ($landtypes as $landtype)
                                            <option value="{{ $landtype->id }}">{{ $landtype->land_type }}</option>
                                            @endforeach
                                        </select>
                                        @error('land_type') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div><!--end col-->

                                <!-- Image Uploads -->
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label class="form-label">Upload Images <span class="text-danger">*</span></label>
                                        <input wire:model="images" type="file" multiple class="form-control">
                                        @error('images.*') <span class="text-danger">{{ $message }}</span> @enderror

                                        <!-- Preview uploaded images -->
                                        @if($editMode && $landId && $images)
                                            @foreach (json_decode($landRecords->find($landId)->images, true) as $image)
                                                <img src="{{ Storage::url($image) }}" alt="Image" width="100">
                                            @endforeach
                                        @endif
                                    </div>
                                </div><!--end col-->

                                <div class="col-md-12">
                                    <div class="mb-3">
                                        <label class="form-label">Additional Information</label>
                                        <textarea wire:model="additional_info" class="form-control" rows="4" placeholder="Enter additional information"></textarea>
                                        @error('additional_info') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div><!--end col-->



                                <div class="col-sm-12">
                                    @if ($editMode)
                                        <!-- Update Existing Record -->
                                        <button wire:click="updateLand" class="btn btn-primary">Update Property</button>
                                    @else
                                        <!-- Submit New Record -->
                                        <button wire:click="submitForm" class="btn btn-primary">Submit Property for Sale</button>
                                    @endif
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end container-->
                    </section><!--end section-->
                @else
                    <!-- Submitted Lands Table -->
                    <section class="section">
                        <div class="container">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Address</th>
                                        <th>Block No</th>
                                        <th>Plot No</th>
                                        <th>Plot Size</th>
                                        <th>Occupancy No</th>
                                        <th>Price</th>
                                        <th>Receipt</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($landRecords as $land)
                                    <tr>
                                        <td>{{ $land->address }}</td>
                                        <td>{{ $land->block_no }}</td>
                                        <td>{{ $land->plot_no }}</td>
                                        <td>{{ $land->plot_size }}</td>
                                        <td>{{ $land->occupancy_no }}</td>
                                        <td>{{ $land->price }}</td>
                                        <td><a href="storage/{{ $land->receipt_url }}">Show</a></td>
                                        <td class="text-end p-3">
                                            <button wire:click="editLand({{ $land->id }})" class="btn btn-sm btn-soft-primary ms-2">Edit</button>
                                            <button wire:click="deleteLand({{ $land->id }})" class="btn btn-sm btn-soft-danger ms-2">Delete</button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </section>
                @endif
            </div>
        </div>

    </section><!--end section-->
    <!-- End -->
</div>
