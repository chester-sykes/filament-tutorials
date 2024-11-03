<?php

namespace App\Filament\Customer\Resources\PostResource\Pages;

use App\Filament\Customer\Resources\PostResource;
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
