<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LandSalesResource\Pages;
use App\Filament\Resources\LandSalesResource\RelationManagers;
use App\Models\LandSales;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LandSalesResource extends Resource
{
    protected static ?string $model = LandSales::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Select::make('land_record_id')
                ->relationship('landRecord', 'plot_no')
                ->searchable()
                ->preload()
                ->required(),
                TextInput::make('buyer_name'),
                TextInput::make('seller_name'),
                TextInput::make('witness1'),
                TextInput::make('witness2'),
                TextInput::make('witness3'),
                TextInput::make('sale_date'),
                TextInput::make('sale_amount'),
                TextInput::make('receipt_no'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('land_record_id'),
                TextColumn::make('buyer_name')->searchable(),
                TextColumn::make('seller_name')->searchable(),
                TextColumn::make('sale_date'),
                TextColumn::make('sale_amount'),
                TextColumn::make('receipt_no')->searchable(),
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
}
