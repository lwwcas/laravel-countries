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
    protected $signature = 'w-countries:install';

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

        if ($this->hasRunMigrations() === false) {
            $this->comment('Consider leaving a star in the repository and helping us to be better.');
            return 0;
        }

        $this->askToRunSeeds();

        $this->publishConfigFile();

        $this->askToStarRepoOnGitHub();

        $this->withEnd();
        return 1;
    }

    /**
     * Publish the config file for the package.
     *
     * @return $this
     */
    public function publishConfigFile(): self
    {
        $this->comment("Publishing config ...");
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
        if ($this->confirm('Would you like to run the migrations now?')) {
            $connection = WCountriesConnection::name();

            $this->comment("Running migrations on the [{$connection}] database connection...");

            $this->callSilently('vendor:publish', [
                '--tag' => 'lwwcas-countries-migrations',
            ]);

            $this->call('migrate', [
                '--database' => $connection,
            ]);

            $this->info('Migrations executed successfully!');
            $this->setTrueRunMigrations();
        }

        $this->newLine();
        return $this;
    }

}
