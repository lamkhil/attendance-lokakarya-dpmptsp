<?php

namespace App\Filament\Resources\Attendances\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class AttendanceForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('slug')
                    ->required(),
                TextInput::make('user_id')
                    ->required()
                    ->numeric(),
                TextInput::make('attendance_session_id')
                    ->required()
                    ->numeric(),
                DateTimePicker::make('check_in_time'),
                DateTimePicker::make('check_out_time'),
                TextInput::make('latitude'),
                TextInput::make('longitude'),
                TextInput::make('ip_address'),
                Textarea::make('user_agent')
                    ->columnSpanFull(),
                Textarea::make('signature')
                    ->columnSpanFull(),
                TextInput::make('photo'),
            ]);
    }
}
