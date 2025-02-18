<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProjectResource\Pages;
use App\Filament\Resources\ProjectResource\RelationManagers;
use App\Models\Project;


use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;

use Filament\Resources\Resource;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class ProjectResource extends Resource
{
    protected static ?string $model = Project::class;

    protected static ?string $navigationIcon = 'heroicon-o-cursor-arrow-ripple';

    public static function getNavigationBadge(): ?string
        {
            return static::getModel()::count();
        }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->columnSpan(2) ,
                RichEditor::make('goal')->columnSpan(2) ,
                RichEditor::make('description')->columnSpan(2) ,
                Select::make('data')
                ->relationship('data', 'name')
                ->preload()
                ->multiple(),
                Select::make('tags')
                ->relationship('tags', 'name')
                ->preload()
                ->multiple(),
                Select::make('themes')
                ->relationship('themes', 'name')
                ->columnSpanFull()
                ->preload()
                ->multiple(),


            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')->limit(50),
                TextColumn::make('goal')->limit(50)->lineClamp(2)->html(),
                TextColumn::make('description')->limit(50)->lineClamp(2)->html(),
                TextColumn::make('themes.name')
                ->listWithLineBreaks()
                ->bulleted(),
                TextColumn::make('tags.name')
                ->listWithLineBreaks()
                ->bulleted(),
                TextColumn::make('data.name')
                ->listWithLineBreaks()
                ->bulleted(),
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
            'index' => Pages\ListProjects::route('/'),
            'create' => Pages\CreateProject::route('/create'),
            'edit' => Pages\EditProject::route('/{record}/edit'),
        ];
    }
}
