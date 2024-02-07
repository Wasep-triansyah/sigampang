<?php

namespace App\Filament\Resources\KotaBengkuluResource\Pages;

use App\Filament\Resources\KotaBengkuluResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListKotaBengkulus extends ListRecords
{
    protected static string $resource = KotaBengkuluResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
