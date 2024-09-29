<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use App\Models\LandSales;
use Filament\Tables\Table;
use App\Models\LandRecords;
use Barryvdh\DomPDF\Facade\Pdf;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Illuminate\Support\Facades\Storage;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\LandSalesResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\LandSalesResource\RelationManagers;
use App\Filament\Resources\LandSalesResource\Widgets\LandSalesOverview;
use Filament\Forms\Components\DatePicker;

class LandSalesResource extends Resource
{
    protected static ?string $model = LandSales::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('land_record_id')
                    ->relationship('landRecord', 'plot_no')
                    ->searchable()
                    ->preload()
                    ->required(),
                TextInput::make('buyer_name')->required(),
                TextInput::make('seller_name')->required(),
                TextInput::make('witness1'),
                TextInput::make('witness2'),
                TextInput::make('witness3'),
                DatePicker::make('sale_date')->required(),
                TextInput::make('sale_amount')->required(),
                TextInput::make('receipt_no')
                    ->required()
                    ->default(function () {
                        return 'OKE-' . now()->timestamp;  // Auto-generated receipt number
                    }),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('land_record_id')->label('Plot No'),
                TextColumn::make('buyer_name')->searchable(),
                TextColumn::make('seller_name')->searchable(),
                TextColumn::make('sale_date'),
                TextColumn::make('sale_amount'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListLandSales::route('/'),
            'create' => Pages\CreateLandSales::route('/create'),
            'edit' => Pages\EditLandSales::route('/{record}/edit'),
        ];
    }

    public static function getWidgets(): array {
        return [
            LandSalesOverview::class,
        ];
    }
}
