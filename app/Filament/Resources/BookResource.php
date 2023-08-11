<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BookResource\Pages;
use App\Filament\Resources\BookResource\RelationManagers;
use App\Models\Book;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Tables\Columns\TextColumn;
use App\Rules\IsbnValidationRule;


class BookResource extends Resource
{
    protected static ?string $model = Book::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form
     ->schema([
            TextInput::make('title')
                ->rules('required', 'max:100'),
                
            TextInput::make('author')
                ->rules('nullable', 'max:255'),
                
            TextInput::make('publisher')
                ->rules('required', 'max:100'),
                
            TextInput::make('isbn')
                ->rules(['required', 'unique:books', new IsbnValidationRule]),
                
            DatePicker::make('publication_year')
                ->rules('nullable', 'integer', 'min:0', 'max:' . date('Y')),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->searchable()->sortable(),
                TextColumn::make('author')->searchable()->sortable(),
                TextColumn::make('publisher')->searchable(),
                TextColumn::make('isbn')->searchable(),
                TextColumn::make('publication_year')->searchable(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }
    
    public static function getRelations(): array
    {
        return [];
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBooks::route('/'),
            'create' => Pages\CreateBook::route('/create'),
            'edit' => Pages\EditBook::route('/{record}/edit'),
        ];
    }    
}
