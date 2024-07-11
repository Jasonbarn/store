<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Resources\Resource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\RelationManagers;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-user';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
                Forms\Components\TextInput::make('name')
                ->required(),
            Forms\Components\TextInput::make('email')
                ->email()
                ->required(),

                //For remember passwords and manage for password
                Forms\Components\TextInput::make('password')
            ->dehydrateStateUsing(fn ($state) => Hash::make($state))
            ->dehydrated(fn ($state) => filled($state))
            ->required(fn (string $context): bool => $context === 'create'),

            Forms\Components\Select::make('role')
                ->options([
                    'user' => 'Client',
                    'admin' => 'Administrateur',
                ])->required(),
                
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('id')->label('Nom')->sortable(),//sert  pour classer les champs en ordre decroissant et croissant
                Tables\Columns\TextColumn::make('name')->sortable()->searchable(),//searchable() sers a rechercher 
                Tables\Columns\TextColumn::make('email')->label('Adresse email')//label pour changer le nom
                ->icon('heroicon-o-at-symbol')//pour choisir un icons heroicon-nom(solid,outline,mini,micro) et le nm de icon qu'on veut
                ->sortable()->searchable(),
                Tables\Columns\SelectColumn::make('role'),
                Tables\Columns\TextColumn::make('created_at')->dateTime()->sortable(),
            ])
            ->filters([
                // filtre pour les roles en fonction du role client ou administratuer
                Tables\Filters\SelectFilter::make('Role')
        ->options([
        'user' => 'Client',
        'admin' => 'Administrateur',

        
    ])

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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }

    
}
