<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LandRecordsResource\Pages;
use App\Filament\Resources\LandRecordsResource\RelationManagers;
use App\Models\LandRecords;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\ImageColumn;
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
                TextInput::make('name'),
                TextInput::make('address'),
                TextInput::make('nationality'),
                TextInput::make('occupation'),
                TextInput::make('block_no'),
                TextInput::make('plot_no'),
                TextInput::make('plot_size'),
                TextInput::make('occupancy_no'),
                TextInput::make('price'),
                FileUpload::make('receipt_url')
                ->label('Upload Receipt')
                ->disk('public')
                ->directory('receipts')
                ->preserveFilenames()
                ->hint('<a href="' . asset('storage/receipts/' . ($this->landRecord->receipt_url ?? '')) . '" target="_blank">View Uploaded Receipt</a>'),
                Select::make('land_type_id')->relationship('types', 'land_type'),
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
                TextColumn::make('plot_no')->searchable(),
                TextColumn::make('house_no')->searchable(),
                TextColumn::make('price')->searchable(),
                TextColumn::make('receipt_url')
                ->label('Receipt')
                ->formatStateUsing(function ($state) {
                    return $state
                        ? '<a href="' . asset('storage/receipts/' . $state) . '" target="_blank">View Receipt</a>'
                        : 'No Receipt';
                })
                ->html(),
                ImageColumn::make('receipt_url')
                ->label('Records')
                ->disk('public'),
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
