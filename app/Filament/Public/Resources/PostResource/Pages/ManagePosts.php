<?php

namespace App\Filament\Public\Resources\PostResource\Pages;

use App\Filament\Public\Resources\PostResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManagePosts extends ManageRecords
{
    protected static string $resource = PostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
