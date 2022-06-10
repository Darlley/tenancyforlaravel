<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GithubResource\Pages;
use App\Filament\Resources\GithubResource\RelationManagers;
use App\Models\Github;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Resources\Table;
use Filament\Tables;
use Illuminate\Contracts\View\View;

class GithubResource extends Resource
{
    protected static ?string $model = Github::class;

    protected static ?string $navigationIcon = 'heroicon-o-collection';

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\TextInput::make('name')->label('Nome')->required()
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
            ])
            ->filters([
                //
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
            'index' => Pages\ListGithubs::route('/'),
            'create' => Pages\CreateGithub::route('/create'),
            'edit' => Pages\EditGithub::route('/{record}/edit'),
            'view' => Pages\Github::route('/github'),
        ];
    }
}
