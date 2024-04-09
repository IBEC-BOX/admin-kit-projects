<?php

namespace AdminKit\Projects\UI\Filament\Resources\ProjectResource\Pages;

use AdminKit\Projects\UI\Filament\Resources\ProjectResource;
use Filament\Resources\Pages\CreateRecord;

class CreateProject extends CreateRecord
{
    protected static string $resource = ProjectResource::class;

    protected function getActions(): array
    {
        return [
            //
        ];
    }

    protected function getRedirectUrl(): string
    {
        return ProjectResource::getUrl();
    }
}
