<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LandRecordsResource\Pages;
use App\Filament\Resources\LandRecordsResource\RelationManagers;
use App\Models\LandRecords;
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

class LandRecordsResource extends Resource
{
    protected static ?string $model = LandRecords::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('app_no')->required(),
                TextInput::make('name'),
                TextInput::make('address'),
                TextInput::make('state'),
                TextInput::make('nationality'),
                TextInput::make('occupation'),
                TextInput::make('block_no'),
                TextInput::make('plot_no'),
                TextInput::make('plot_size'),
                TextInput::make('lga'),
                TextInput::make('occupancy_no'),
                TextInput::make('amount_paid'),
                TextInput::make('receipt_no'),
                TextInput::make('land_use'),
                Select::make('is_available')
                ->options([
                    '1' => 'Yes',
                    '0' => 'No',
                ])
                ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('app_no')->searchable(),
                TextColumn::make('name')->searchable(),
                TextColumn::make('address')->searchable(),
                TextColumn::make('state')->searchable(),
                TextColumn::make('plot_no')->searchable(),
                TextColumn::make('house_no')->searchable(),
                TextColumn::make('lga')->searchable(),
                TextColumn::make('amount_paid')->searchable(),
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
            'index' => Pages\ListLandRecords::route('/'),
            'create' => Pages\CreateLandRecords::route('/create'),
            'edit' => Pages\EditLandRecords::route('/{record}/edit'),
        ];
    }
}
