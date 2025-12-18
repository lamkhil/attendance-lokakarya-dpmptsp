<?php

namespace App\Filament\Resources\AttendanceSessions\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Hidden;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class AttendanceSessionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Hidden::make('slug')
                    ->unique(table: 'attendance_sessions', column: 'slug', ignoreRecord: true)
                    ->default(Str::random(8)),
                TextInput::make('name')
                    ->required()
                    ->columnSpanFull(),
                DateTimePicker::make('start_time')
                    ->required(),
                DateTimePicker::make('end_time'),
                Hidden::make('created_by')
                    ->default(fn () => auth()->id()),
            ]);
    }
}
