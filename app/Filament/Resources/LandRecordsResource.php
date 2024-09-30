<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use App\Models\LandRecords;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Tables\Columns\ImageColumn;
use Filament\Forms\Components\FileUpload;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\LandRecordsResource\Pages;
use App\Filament\Resources\LandRecordsResource\RelationManagers;
use App\Filament\Resources\LandRecordsResource\Widgets\LandRecordsOverview;

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
                ->disk('public')
                ->directory('receipts')
                ->required(),
                Select::make('land_type_id')
                    ->relationship('type', 'land_type') // Adjust the field name if necessary
                    ->label('Land Type')
                    ->searchable()
                    ->preload()
                    ->required(),
                Select::make('is_available'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->searchable(),
                TextColumn::make('address')->searchable(),
                TextColumn::make('plot_no')->searchable(),
                TextColumn::make('plot_size')->searchable(),
                TextColumn::make('price')->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Action::make('viewFile')
                ->label('View Receipt')
                ->icon('heroicon-o-eye') // Optional: you can use a different icon
                ->url(fn ($record) => asset('storage/' . $record->receipt_url)) // URL to view the file
                ->openUrlInNewTab(),
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

    public static function getWidgets(): array {
        return [
            LandRecordsOverview::class,
        ];
    }
}
