<?php

namespace AdminKit\Projects;

use Filament\Contracts\Plugin;
use Filament\Panel;
use AdminKit\Projects\UI\Filament\Resources\ProjectResource;

class FilamentPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-plugin-admin-kit-projects';
    }

    public function register(Panel $panel): void
    {
        $panel->resources([
            ProjectResource::class,
        ]);
    }

    public function boot(Panel $panel): void
    {
    }

    public static function make(): static
    {
        return app(static::class);
    }
}
