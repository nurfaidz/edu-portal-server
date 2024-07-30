<?php

namespace App\Filament\Resources\LecturerResource\RelationManagers;

use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LecturerCoursesRelationManager extends RelationManager
{
    protected static string $relationship = 'lecturerCourses';

    protected static ?string $title = 'Mata Kuliah Dosen';

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make()
                    ->schema([
                        Forms\Components\Select::make('course_id')
                            ->label('Mata Kuliah')
                            ->options(
                                \App\Models\Course::query()
                                    ->pluck('name', 'id')
                                    ->toArray()
                            )
                            ->required(),
                        Forms\Components\Select::make('classroom')
                            ->label('Ruang Kelas')
                            ->options([
                                \App\Enums\Courses\Classroom::A->value => \App\Enums\Courses\Classroom::A->value,
                                \App\Enums\Courses\Classroom::B->value => \App\Enums\Courses\Classroom::B->value,
                            ])
                            ->required(),
                        Forms\Components\Select::make('semester')
                            ->label('Semester')
                            ->options([
                                \App\Enums\Courses\Semester::One->value => \App\Enums\Courses\Semester::One->value,
                                \App\Enums\Courses\Semester::Two->value => \App\Enums\Courses\Semester::Two->value,
                                \App\Enums\Courses\Semester::Three->value   => \App\Enums\Courses\Semester::Three->value,
                                \App\Enums\Courses\Semester::Four->value    => \App\Enums\Courses\Semester::Four->value,
                                \App\Enums\Courses\Semester::Five->value    => \App\Enums\Courses\Semester::Five->value,
                                \App\Enums\Courses\Semester::Six->value     => \App\Enums\Courses\Semester::Six->value,
                                \App\Enums\Courses\Semester::Seven->value   => \App\Enums\Courses\Semester::Seven->value,
                                \App\Enums\Courses\Semester::Eight->value   => \App\Enums\Courses\Semester::Eight->value,
                            ])
                            ->required(),
                        Forms\Components\TextInput::make('year')
                            ->label('Tahun')
                            ->numeric()
                            ->required(),
                    ])
                    ->columns(2),
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('title')
            ->columns([
                Tables\Columns\TextColumn::make('course.name')
                    ->label('Mata Kuliah'),
                Tables\Columns\TextColumn::make('classroom')
                    ->label('Ruang Kelas'),
                Tables\Columns\TextColumn::make('semester')
                    ->label('Semester'),
                Tables\Columns\TextColumn::make('year')
                    ->label('Tahun'),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                Tables\Actions\CreateAction::make()
                    ->label('Tambah Mata Kuliah'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                //
            ]);
    }
}
