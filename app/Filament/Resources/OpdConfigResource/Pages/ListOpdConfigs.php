<?php

namespace App\Filament\Resources\OpdConfigResource\Pages;

use App\Filament\Resources\OpdConfigResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOpdConfigs extends ListRecords
{
    protected static string $resource = OpdConfigResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
