<?php

namespace Lwwcas\LaravelCountries\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;
use Lwwcas\LaravelCountries\Support\WCountriesConnection;
use Lwwcas\LaravelCountries\Trait\WithBasePackageTools;
use Lwwcas\LaravelCountries\Trait\WithLanguages;

class WCountriesSeedCommand extends Command
{
    use WithBasePackageTools, WithLanguages;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'w-countries:seed
                            {--languages= : Comma-separated locales to seed (e.g. en,pt,es). Defaults to en only}
                            {--all : Seed all available languages}
                            {--show-commands : Display equivalent php artisan db:seed commands and exit}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run Laravel Countries language seeders manually (production-safe). Compatible with Laravel 11, 12, and 13.';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $connection = WCountriesConnection::name();

        if (
            Schema::connection($connection)->hasTable('lc_countries') === false
            || Schema::connection($connection)->hasTable('lc_regions') === false
        ) {
            $this->error('The countries and regions tables must exist before running seeders.');
            $this->info('Run php artisan w-countries:install first, or deploy your migrations.');

            return self::FAILURE;
        }

        if ($this->option('show-commands')) {
            $this->displayManualSeedCommands($connection);

            return self::SUCCESS;
        }

        $selectedLanguages = $this->resolveSelectedLanguagesFromLocales(
            $this->option('languages'),
            (bool) $this->option('all')
        );

        if ($selectedLanguages === []) {
            $this->error('No valid languages were selected.');

            return self::FAILURE;
        }

        $this->comment('Running seeders on the ['.$connection.'] database connection...');
        $this->runSeeds($selectedLanguages);

        $this->newLine();
        $this->comment('Need the raw commands? Run: php artisan w-countries:seed --show-commands');

        return self::SUCCESS;
    }

    /**
     * Display the equivalent manual db:seed commands.
     */
    protected function displayManualSeedCommands(string $connection): void
    {
        $this->info('Manual seed commands (use --force in production on Laravel 11, 12, and 13):');
        $this->newLine();

        foreach ($this->listManualSeedCommands($connection) as $entry) {
            $this->line(sprintf(
                '[%s] %s: %s',
                $entry['locale'],
                $entry['language'],
                $entry['command']
            ));
        }
    }
}
