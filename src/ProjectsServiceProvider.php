<?php

namespace AdminKit\Projects;

use AdminKit\Projects\Commands\ProjectsCommand;
use AdminKit\Projects\Providers\RouteServiceProvider;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class ProjectsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('admin-kit-projects')
            ->hasConfigFile()
            ->hasViews()
            ->hasTranslations()
            ->hasMigration('create_admin_kit_projects_table')
            ->hasCommand(ProjectsCommand::class);
    }

    public function registeringPackage()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
