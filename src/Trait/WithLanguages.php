<?php

namespace Lwwcas\LaravelCountries\Trait;

use Lwwcas\LaravelCountries\Database\Seeders\Languages\ArabicLanguageSeeder as Arabic;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\DutchLanguageSeeder as Dutch;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\FrenchLanguageSeeder as French;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\GermanLanguageSeeder as German;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\ItalianLanguageSeeder as Italian;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\PortugueseLanguageSeeder as Portuguese;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\RussianLanguageSeeder as Russian;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\SpanishLanguageSeeder as Spanish;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\TurkishLanguageSeeder as Turkish;
use Lwwcas\LaravelCountries\Database\Seeders\LwwcasDatabaseSeeder as English;
use Lwwcas\LaravelCountries\Models\CountryRegionTranslation as RegionsLanguages;
use Lwwcas\LaravelCountries\Support\WCountriesConnection;

trait WithLanguages
{
    /**
     * The list of languages that can be installed.
     */
    public array $languages = [
        'None' => null,
        'All' => null,
        'English' => English::class,
        'Arabic' => Arabic::class,
        'Dutch' => Dutch::class,
        'French' => French::class,
        'German' => German::class,
        'Italian' => Italian::class,
        'Portuguese' => Portuguese::class,
        'Russian' => Russian::class,
        'Spanish' => Spanish::class,
        'Turkish' => Turkish::class,
    ];

    /**
     * The list of languages that can be installed by key.
     */
    public array $languagesByLocale = [
        'en' => 'English',
        'ar' => 'Arabic',
        'nl' => 'Dutch',
        'fr' => 'French',
        'de' => 'German',
        'it' => 'Italian',
        'pt' => 'Portuguese',
        'ru' => 'Russian',
        'es' => 'Spanish',
        'tr' => 'Turkish',
    ];

    /**
     * Resolve language names from a comma-separated locale string.
     *
     * @return string[]
     */
    public function resolveSelectedLanguagesFromLocales(?string $locales = null, bool $all = false): array
    {
        if ($all) {
            return collect($this->languages)
                ->keys()
                ->reject(fn (string $name) => in_array($name, ['None', 'All']))
                ->values()
                ->all();
        }

        if ($locales === null || trim($locales) === '') {
            return ['English'];
        }

        $selected = [];
        foreach (array_map('trim', explode(',', strtolower($locales))) as $locale) {
            if ($locale === 'all') {
                return $this->resolveSelectedLanguagesFromLocales(all: true);
            }

            $languageName = $this->languagesByLocale[$locale] ?? null;
            if ($languageName === null) {
                $this->warn("Unknown locale [{$locale}]. Skipping.");

                continue;
            }

            $selected[] = $languageName;
        }

        return array_values(array_unique($selected));
    }

    /**
     * Build the equivalent manual db:seed command for a seeder class.
     */
    public function buildManualSeedCommand(string $seederClass, ?string $database = null): string
    {
        $database ??= WCountriesConnection::name();

        return sprintf(
            'php artisan db:seed --class="%s" --database=%s --force',
            $seederClass,
            $database
        );
    }

    /**
     * List all manual db:seed commands indexed by locale.
     *
     * @return array<string, array{language: string, locale: string, class: class-string, command: string}>
     */
    public function listManualSeedCommands(?string $database = null): array
    {
        $commands = [];

        foreach ($this->languagesByLocale as $locale => $languageName) {
            $class = $this->languages[$languageName] ?? null;

            if ($class === null) {
                continue;
            }

            $commands[$locale] = [
                'language' => $languageName,
                'locale' => $locale,
                'class' => $class,
                'command' => $this->buildManualSeedCommand($class, $database),
            ];
        }

        return $commands;
    }

    /**
     * Ask the user if they want to run the seeds for the languages
     * that are not English.
     *
     * @return $this
     */
    public function askToRunSeeds(?array $languages = null): self
    {
        if ($this->hasOption('force') && $this->option('force')) {
            $selectedLanguages = $this->resolveSelectedLanguagesFromLocales($this->option('languages'));
            $this->runSeeds($selectedLanguages);
            $this->newLine();

            return $this;
        }

        if ($languages === null) {
            $languages = array_keys($this->languages);
            $key = array_search('English', $languages);
            if ($key !== false) {
                unset($languages[$key]); // English
            }
        }

        $this->info('English is the default language and must be installed.');
        $this->info('However, other translations are optional.');
        $this->info('The following translations are available:');

        $languagesTable = array_values($languages);
        $noneKey = array_search('None', $languagesTable);
        $allKey = array_search('All', $languagesTable);
        if ($noneKey !== false) {
            unset($languagesTable[$noneKey], $languagesTable[$allKey]);
        }

        $this->table(
            ['Language'],
            [$languagesTable]
        );
        $this->newLine();

        $this->comment('(You can select multiple options)');
        $this->comment('like this: "4, 3, 6"');

        $selectedLanguages = [];
        $languagesConfirmed = false;
        do {
            $selectedLanguages = $this->choice(
                'Please select the languages you want to install:',
                $languages,
                null, // Default value (none by default)
                null, // Number of attempts
                true  // Allow multiple selection
            );

            $selectedLanguages = array_unique($selectedLanguages);
            if (in_array('None', $selectedLanguages)) {
                $this->info('You chose not to install any additional languages.');
            } elseif (in_array('All', $selectedLanguages)) {
                $this->info('You chose to install all available languages.');
            } else {
                $this->info('You have selected the following languages:');
                $this->info(implode(', ', $selectedLanguages));
            }

            $languagesConfirmed = $this->confirm('Do you want to choose again?', false);
        } while ($languagesConfirmed);

        $this->runSeeds($selectedLanguages);

        $this->newLine();

        return $this;
    }

    /**
     * Run the selected language seeds.
     *
     * @return $this
     */
    public function runSeeds(array $selectedLanguages): self
    {
        if (in_array('None', $selectedLanguages)) {
            $selectedLanguages = [];
            array_unshift($selectedLanguages, 'English');
        }

        if (in_array('All', $selectedLanguages)) {
            $selectedLanguages = array_keys($this->languages);
            $noneKey = array_search('None', $selectedLanguages);
            $allKey = array_search('All', $selectedLanguages);
            unset($selectedLanguages[$noneKey], $selectedLanguages[$allKey]);
        }

        // English must be the first language on the array, because it's the default
        if (in_array('English', $selectedLanguages) === false) {
            $enLocale = RegionsLanguages::select('locale')
                ->where('locale', 'en')
                ->limit(1)
                ->first();

            if ($enLocale === null) {
                array_unshift($selectedLanguages, 'English');
            }
        }

        $filteredLanguages = collect($this->languages)
            ->filter(function ($class, $language) use ($selectedLanguages) {
                return in_array($language, $selectedLanguages);
            })
            ->all();

        $this->comment('Running languages...');
        foreach ($filteredLanguages as $language => $class) {
            $this->callSilently('db:seed', [
                '--class' => $class,
                '--database' => WCountriesConnection::name(),
                '--force' => true,
            ]);
            $this->comment("{$language} executed successfully.");
        }

        $this->info('Seeds executed successfully!');

        return $this;
    }
}
