<?php

namespace MrHarb\Learning;

use MrHarb\Learning\Commands\LearningCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
