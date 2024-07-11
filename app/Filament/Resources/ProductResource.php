<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Product;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Components\TextInput;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\ProductResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\ProductResource\RelationManagers;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            
                Forms\Components\TextInput::make('name')->label('Nom')->required(),
                Forms\Components\Textarea::make('description'),
            Forms\Components\TextInput::make('price')
            ->label('Prix')
                ->required(),

                // relations entre la table categorie et product sa categorie et son nom
                Forms\Components\Select::make('category')
                ->label('Categorie')
                ->relationship(name: 'category', titleAttribute: 'name')
                ->required(),
                Forms\Components\FileUpload::make('images')->multiple()
                ,
            
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\ImageColumn::make('image')
                ->circular()
                ->stacked(),
                Tables\Columns\TextColumn::make('name')
                ->description(fn (Product $record): string =>substr($record->description , 0 , 20))
                ->sortable()->searchable(),
                Tables\Columns\TextColumn::make('price')->money('eur')->sortable(),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable()->searchable(),
                

            ])
            ->filters([
                //
                Tables\Filters\SelectFilter::make('Category')
                    ->relationship('category', 'name')
                    ,
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}
