<?php

namespace App\Filament\Resources\MyprojectResource\Pages;

use App\Filament\Resources\MyprojectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMyproject extends EditRecord
{
    protected static string $resource = MyprojectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
