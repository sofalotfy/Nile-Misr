<?php

namespace App\Console\Commands;

use Illuminate\Console\Attributes\Description;
use Illuminate\Console\Attributes\Signature;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

#[Signature('app:make-filament-resources')]
#[Description('Create Filament resources for all models')]
class MakeFilamentResources extends Command
{
    public function handle(): int
    {
        $modelsPath = app_path('Models');

        $modelFiles = File::files($modelsPath);

        foreach ($modelFiles as $file) {
            if ($file->getExtension() !== 'php') {
                continue;
            }

            $model = $file->getBasename('.php');

            $this->info("Creating Filament resource for {$model}...");

            $this->call('make:filament-resource', [
                $model,
            ]);
        }

        $this->info('All Filament resources have been created.');

        return self::SUCCESS;
    }
}