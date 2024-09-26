<?php

namespace App\Filament\Resources\LandSalesResource\Pages;

use Filament\Actions;
use App\Models\LandRecords;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Storage;
use Filament\Resources\Pages\EditRecord;
use App\Filament\Resources\LandSalesResource;

class EditLandSales extends EditRecord
{
    protected static string $resource = LandSalesResource::class;

    protected function afterSave(): void
    {
        $landSale = $this->record;  // The updated LandSales model

        // 1. Update the land record with the buyer's name
        $landRecord = LandRecords::find($landSale->land_record_id);
        if ($landRecord) {
            $landRecord->name = $landSale->buyer_name;

            // 2. Generate PDF receipt
            $pdf = Pdf::loadView('land-sale-receipt', [
                'buyer_name' => $landSale->buyer_name,
                'seller_name' => $landSale->seller_name,
                'sale_amount' => $landSale->sale_amount,
                'sale_date' => $landSale->sale_date,
                'receipt_no' => $landSale->receipt_no,
                'land_record' => $landRecord->plot_no,
                'witnesses' => [$landSale->witness1, $landSale->witness2, $landSale->witness3],
                'address' => $landRecord->address
            ]);

            // 3. Store the PDF in the public folder and save the receipt path
            $pdfFilePath = 'land_sales_receipts/receipt_' . $landSale->receipt_no . '.pdf';
            Storage::disk('public')->put($pdfFilePath, $pdf->output());

            // 4. Update the receipt URL in the land record
            $landRecord->receipt_url = $pdfFilePath;
            $landRecord->save();
        }
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
