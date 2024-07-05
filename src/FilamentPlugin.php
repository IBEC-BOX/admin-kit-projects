<?php

namespace AdminKit\Projects;

use AdminKit\Projects\UI\Filament\Resources\ProjectResource;
use Filament\Contracts\Plugin;
use Filament\Panel;

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

    public function boot(Panel $panel): void {}

    public static function make(): static
    {
        return app(static::class);
    }
}
