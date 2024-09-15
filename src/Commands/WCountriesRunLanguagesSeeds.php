<?php

namespace Lwwcas\LaravelCountries\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;
use Lwwcas\LaravelCountries\Models\CountryRegionTranslation as RegionsLanguages;
use Lwwcas\LaravelCountries\Models\CountryRegionTranslation;
use Lwwcas\LaravelCountries\Models\CountryTranslation;
use Lwwcas\LaravelCountries\Trait\WithBasePackageTools;
use Lwwcas\LaravelCountries\trait\WithLanguages;

class WCountriesRunLanguagesSeeds extends Command
{
    use WithBasePackageTools, WithLanguages;

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'w-countries:languages';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Installs language seeders for one or more selected languages.';

    protected array $languagesSelected = [];

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if (Schema::hasTable('lc_countries') == false || Schema::hasTable('lc_regions') == false) {
            $this->error('First install the countries and regions tables.');
            $this->info('Run php artisan w-countries:install for the structure to be installed first.');
            $this->newLine();

            if ($this->confirm('Would you like to run the install?')) {
                $this->call('w-countries:install');
            }

            return 0;
        }

        $this->startWarnings();

        $installedLanguages = $this->getInstalledLanguages();
        $notInstalledLanguages = array_diff_assoc($this->languages, $installedLanguages);
        unset($notInstalledLanguages['None'], $notInstalledLanguages['All']);

        $this->info('English is the default language and must be installed, and it cannot be removed.');
        $this->info('The languages listed below, are the ones currently installed in your database.');

        $languagesTable = array_keys($installedLanguages);
        $this->table(
            ['My Languages'],
            [$languagesTable]
        );

        $action = $this->choice(
            'What would you like to do?',
            ['Install', 'Uninstall']
        );

        if ($action == 'Install') {
            $notInstalledLanguagesCount = count($notInstalledLanguages);
            if ($notInstalledLanguagesCount > 1) {
                $this->newLine();
                $this->info('The languages listed below, are available for installation.');
                $this->installLanguages(array_keys($notInstalledLanguages));

            } else {
                $this->comment('You have already installed all languages.');
                $this->newLine();

            }
        }

        if ($action === 'Uninstall') {
            $installedLanguagesCount = count($installedLanguages);
            if ($installedLanguagesCount > 1) {
                $this->uninstallLanguages(array_keys($installedLanguages));

            } else {
                $this->comment('Only English is currently installed and cannot be uninstalled.');
                $this->newLine();

            }
        }

        $this->withEnd();
    }

    /**
     * Install languages from the database.
     *
     * @param  array  $selectedLanguages
     * @return $this
     */
    protected function installLanguages(array $selectedLanguages): self
    {
        $this->askToRunSeeds($selectedLanguages);

        return $this;
    }

        /**
         * Uninstall languages from the database.
         *
         * @param array $installedLanguages
         * @return $this
         */
    protected function uninstallLanguages(array $installedLanguages): self
    {
        $this->error('Warning: You are about to permanently delete these languages from your database.');
        $this->error('This action cannot be undone!');
        $this->line('Make a backup before continuing.');
        $this->newLine();

        $languagesConfirmed = false;
        $key = array_search('English', $installedLanguages);
        if ($key !== false) {
            unset($installedLanguages[$key]); // English
        }

        do {
            $selectedLanguages = $this->choice(
                'Please select the languages you want to Uninstall:',
                $installedLanguages,
                null, // Default value (none by default)
                null, // Number of attempts
                true  // Allow multiple selection
            );

            $selectedLanguages = array_unique($selectedLanguages);
            $this->info('You have selected the following languages:');
            $this->info(implode(', ', $selectedLanguages));

            $languagesConfirmed = $this->confirm('Do you want to choose again?', false);
        } while ($languagesConfirmed);

        $keysToDelete = [];
        foreach ($selectedLanguages as $language) {
            $key = array_search($language, $this->languagesByLocale);
            if ($key !== false) {
                $keysToDelete[] = $key;
            }
        }

        CountryTranslation::select('locale')
        ->where('locale', '!=', 'en')
        ->whereIn('locale', $keysToDelete)
        ->delete();

        CountryRegionTranslation::select('locale')
        ->where('locale', '!=', 'en')
        ->whereIn('locale', $keysToDelete)
        ->delete();

        foreach ($selectedLanguages as $language) {
            $this->comment("{$language} deleted successfully.");
        }

        $this->newLine();
        return $this;
    }

    /**
     * Returns an array of languages that are already in the database.
     *
     * The keys of the array are the names of the languages (e.g. "English"), and
     * the values are the fully qualified class names that correspond to the
     * language seeders.
     *
     * @return array<string, string>
     */
    protected function getInstalledLanguages(): array
    {
        $installedLanguages = [];
        $locales = RegionsLanguages::select('locale')
            ->distinct()
            ->pluck('locale')
            ->toArray();

        foreach ($locales as $locale) {
            $languageName = $this->languagesByLocale[$locale] ?? null;
            $languageClass = $this->languages[$languageName] ?? null;

            if ($languageName && $languageClass) {
                $installedLanguages[$languageName] = $languageClass;
            }
        }

        return $installedLanguages;
    }

}
