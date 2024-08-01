<?php

namespace App\Filament\Resources\CourseResource\Pages;

use App\Filament\Resources\CourseResource;
use Filament\Actions;
use Filament\Infolists\Infolist;
use Filament\Infolists;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Console\View\Components\Info;

class ViewCourse extends ViewRecord
{
    protected static string $resource = CourseResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }

    public function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\Section::make('Informasi Mata Kuliah')
                    ->schema([
                        Infolists\Components\TextEntry::make('name')
                            ->label('Nama Mata Kuliah'),
                        Infolists\Components\TextEntry::make('code')
                            ->label('Kode Mata Kuliah'),
                        Infolists\Components\TextEntry::make('credits')
                            ->label('SKS'),
                        Infolists\Components\TextEntry::make('semester')
                            ->label('Semester'),
                        Infolists\Components\TextEntry::make('type')
                            ->label('Tipe'),
                        Infolists\Components\TextEntry::make('description')
                            ->label('Deskripsi'),
                    ])
                    ->columns(2),
                ]);

    }

}
