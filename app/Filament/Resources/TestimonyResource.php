<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TestimonyResource\Pages;
use App\Filament\Resources\TestimonyResource\RelationManagers;
use App\Models\Testimony;
use App\Models\Student;
use App\Models\Project;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;

use Filament\Resources\Resource;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TestimonyResource extends Resource
{
    protected static ?string $model = Testimony::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }
    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            # Toggle::make('is_available'),
            Toggle::make('is_visible'),
            TextInput::make('title')->columnSpan(2)->required() ,

            RichEditor::make('short')->columnSpan(2)->label('Write a short (<50 words) testimony')->required() ,
            RichEditor::make('long')->columnSpan(2)->label('Write a full testimony') ,
            Select::make('student_id')
            ->label('Student')
            ->options(Student::all()->pluck('last_name', 'id'))
            ->searchable()
            ->columnSpan(2),
            Select::make('project_id')
            ->options(Project::all()->pluck('name', 'id'))
            ->preload()
            ->columnSpan(2),
            TextInput::make('URL')->label('URL to outside video, blog or poster')->columnSpan(2) ,
            TextInput::make('video_id')->label('CODE to YOUTUBE video')->columnSpan(2) ,

        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                IconColumn::make('is_visible')
                ->boolean()
                ->trueIcon('heroicon-o-check-badge')
                ->falseIcon('heroicon-o-x-mark')
                ->label('Published'),

                TextColumn::make('title')->limit(50),
                TextColumn::make('URL')->label('URL')->limit(50),
                TextColumn::make('video_id')->label('Video')->limit(50),
                TextColumn::make('short')->limit(50)->lineClamp(2)->html(),
                TextColumn::make('long')->limit(50)->lineClamp(2)->html(),
                TextColumn::make('student.first_name'),
                TextColumn::make('student.last_name'),
                TextColumn::make('project.name')->label('Project')->limit(50),

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
            'index' => Pages\ListTestimonies::route('/'),
            'create' => Pages\CreateTestimony::route('/create'),
            'edit' => Pages\EditTestimony::route('/{record}/edit'),
        ];
    }
}
