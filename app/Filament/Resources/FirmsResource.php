<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Firms;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Illuminate\Database\Eloquent\Builder;
use Filament\Tables\Columns\BooleanColumn;
use App\Filament\Resources\FirmsResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\FirmsResource\RelationManagers;
use Filament\Actions\DeleteAction;
use Filament\Forms\Components\FileUpload;

class FirmsResource extends Resource
{
    protected static ?string $model = Firms::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('company_name')
                    ->required()
                    ->maxLength(255)
                    ->label('Company Name'),

                Textarea::make('description')
                    ->label('Description')
                    ->rows(4)
                    ->placeholder('Enter a brief description of the company'),

                Select::make('type_id')
                    ->relationship('type', 'land_type') // Adjust the field name if necessary
                    ->label('Category')
                    ->searchable()
                    ->preload()
                    ->required(),

                TextInput::make('contact_email')
                    ->email()
                    ->required()
                    ->label('Contact Email'),

                TextInput::make('phone_number')
                    ->required()
                    ->label('Phone Number'),

                TextInput::make('website_url')
                    ->url()
                    ->label('Website URL')
                    ->placeholder('Enter the company website'),

                TextInput::make('address')
                    ->required()
                    ->label('Address'),

                TextInput::make('state')
                    ->required()
                    ->label('State'),

                FileUpload::make('logo_url')
                    ->label('Logo URL')
                    ->disk('public')
                    ->directory('logos'),

                TextInput::make('year_established')
                    ->label('Year Established')
                    ->placeholder('Select year'),

                Textarea::make('services_offered')
                    ->label('Services Offered')
                    ->rows(3)
                    ->placeholder('Enter the services the company offers'),

                Toggle::make('is_active')
                    ->label('Active Status')
                    ->inline(false)
                    ->default(true),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('company_name')->label('Company Name')->sortable(),
                TextColumn::make('type.category_name')->label('Category'),
                TextColumn::make('contact_email')->label('Email'),
                TextColumn::make('phone_number')->label('Phone'),
                TextColumn::make('state')->label('State'),
                BooleanColumn::make('is_active')->label('Active'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
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
            'index' => Pages\ListFirms::route('/'),
            'create' => Pages\CreateFirms::route('/create'),
            'edit' => Pages\EditFirms::route('/{record}/edit'),
        ];
    }
}
