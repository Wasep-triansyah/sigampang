<?php

namespace App\Filament\Resources\KotaBengkuluResource\Pages;

use App\Filament\Resources\KotaBengkuluResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditKotaBengkulu extends EditRecord
{
    protected static string $resource = KotaBengkuluResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
