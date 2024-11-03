<?php

namespace App\Filament\ResourceFields;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Set;
use Illuminate\Support\Str;

class PostFields
{
    public static function titleInput(): TextInput
    {
        return TextInput::make('title')
            ->live(onBlur: true)
            ->afterStateUpdated(function (Set $set, ?string $operation, ?string $state) {

                if ($operation === 'edit') {
                    return;
                }

                $set('slug', Str::slug($state));
            })
            ->required();
    }

    public static function slugInput(): TextInput
    {
        return TextInput::make('slug')
            ->required();
    }

    public static function contentInput(): Textarea
    {
        return Textarea::make('content')
            ->required();
    }
}
