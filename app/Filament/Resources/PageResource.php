<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\ImageColumn;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;



class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')->required()
                ->maxLength(50)->label('Blade name'),
                TextInput::make('imagefile')->label('Image filename (incl. .ext)')
                ->maxLength(80),
                TextInput::make('title')->required()
                ->maxLength(255),
                TextInput::make('description')->required()
                ->maxLength(255),
                Select::make('status')
                ->options([
                    'Draft' => 'Draft',
                    'Reviewing' => 'Reviewing',
                    'Published' => 'Published',
                ]),
                Toggle::make('isOnHomePage'),
                Toggle::make('isPinned'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
                ->columns([
                    TextColumn::make('title')->wrap(80),
                    IconColumn::make('status')
                        ->icon(fn (string $state): string => match ($state) {
                        'Draft' => 'heroicon-o-pencil',
                        'Reviewing' => 'heroicon-o-clock',
                        'Published' => 'heroicon-o-check-badge',
                        })
                        ->color(fn (string $state): string => match ($state) {
                            'Draft' => 'info',
                            'Reviewing' => 'warning',
                            'Published' => 'success',
                            default => 'gray',
                        }),
                        IconColumn::make('isOnHomePage')
                            ->boolean()
                            ->trueIcon('heroicon-o-check-badge')
                            ->falseIcon('heroicon-o-x-mark')
                            ->label('on Home Page'),
                        IconColumn::make('isPinned')
                            ->boolean()
                            ->trueIcon('heroicon-m-bookmark-square')
                            ->falseIcon('heroicon-o-x-mark')
                            ->label('Pinned'),
                    TextColumn::make('name')->label('Filename'),
                    ImageColumn::make('imagefile')->disk('images')->label('Image')
                        ->checkFileExistence(false),
                    TextColumn::make('description')->label('Summary')->wrap(100),
        ])
            ->filters([

            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make(),
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
            'view'=> Pages\ViewPage::route('/{record}'),
        ];
    }
}
