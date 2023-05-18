<?php

namespace MrHarb\Learning;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use MrHarb\Learning\Commands\LearningCommand;

class LearningServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('learning')
            ->hasConfigFile()
//            ->hasViews()
//            ->hasMigration('create_learning_table')
            ->hasCommand(LearningCommand::class);
    }
}
