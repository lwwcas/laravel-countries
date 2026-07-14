<?php

namespace Lwwcas\LaravelCountries\Commands;

use Illuminate\Console\Command;
use Lwwcas\LaravelCountries\Support\WCountriesConnection;
use Lwwcas\LaravelCountries\Trait\WithBasePackageTools;
use Lwwcas\LaravelCountries\Trait\WithLanguages;

class WCountriesInstallCommand extends Command
{
    use WithBasePackageTools, WithLanguages;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'w-countries:install
                            {--force : Run without confirmation prompts (required in production on Laravel 11, 12, and 13)}
                            {--languages= : Comma-separated locales to seed when using --force (e.g. en,pt,es). Defaults to en only}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Installs database migrations and seeders for the Laravel Countries package.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->startWarnings();

        $this->askToRunMigrations();

        if ($this->hasRunMigrations() === false && ! $this->option('force')) {
            $this->comment('Consider leaving a star in the repository and helping us to be better.');

            return self::SUCCESS;
        }

        if ($this->hasRunMigrations() === false) {
            return self::FAILURE;
        }

        $this->askToRunSeeds();

        $this->publishConfigFile();

        if (! $this->option('force')) {
            $this->askToStarRepoOnGitHub();
        }

        $this->withEnd();

        return self::SUCCESS;
    }

    /**
     * Publish the config file for the package.
     *
     * @return $this
     */
    public function publishConfigFile(): self
    {
        $this->comment('Publishing config ...');
        $this->callSilently('vendor:publish', [
            '--tag' => 'lwwcas-countries-config',
        ]);

        $this->callSilently('vendor:publish', [
            '--tag' => 'translatable',
        ]);

        $this->newLine();

        return $this;
    }

    /**
     * Ask the user if they want to run the migrations.
     *
     * @return $this
     */
    public function askToRunMigrations(): self
    {
        if ($this->option('force') || $this->confirm('Would you like to run the migrations now?')) {
            $this->runMigrations();
        }

        $this->newLine();

        return $this;
    }

    /**
     * Publish and run package migrations.
     */
    protected function runMigrations(): self
    {
        $connection = WCountriesConnection::name();

        $this->comment("Running migrations on the [{$connection}] database connection...");

        $this->callSilently('vendor:publish', [
            '--tag' => 'lwwcas-countries-migrations',
        ]);

        $migrateOptions = [
            '--database' => $connection,
        ];

        if ($this->option('force')) {
            $migrateOptions['--force'] = true;
        }

        $this->call('migrate', $migrateOptions);

        $this->info('Migrations executed successfully!');
        $this->setTrueRunMigrations();

        return $this;
    }
}
