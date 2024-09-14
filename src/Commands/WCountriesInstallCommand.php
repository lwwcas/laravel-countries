<?php

namespace Lwwcas\LaravelCountries\Commands;

use Illuminate\Console\Command;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\ArabicLanguageSeeder as Arabic;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\DutchLanguageSeeder as Dutch;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\FrenchLanguageSeeder as French;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\GermanLanguageSeeder as German;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\ItalianLanguageSeeder as Italian;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\PortugueseLanguageSeeder as Portuguese;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\RussianLanguageSeeder as Russian;
use Lwwcas\LaravelCountries\Database\Seeders\Languages\SpanishLanguageSeeder as Spanish;
use Lwwcas\LaravelCountries\Database\Seeders\LwwcasDatabaseSeeder;

class WCountriesInstallCommand extends Command
{
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
     * Set the name of the package.
     *
     * @var string
     */
    protected string $packageName = 'lwwcas-countries';

    /**
     * Set the github Url of the package.
     *
     * @var string
     */
    protected string $gitHubUrl = 'https://github.com/lwwcas/laravel-countries';

    protected array $languages = [
        'None' => null,
        'Arabic' => Arabic::class,
        'Dutch' => Dutch::class,
        'German' => German::class,
        'Italian' => Italian::class,
        'Portuguese' => Portuguese::class,
        'Russian' => Russian::class,
        'Spanish' => Spanish::class,
    ];

    protected bool $askToRunMigrations = false;

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->error('!!!!!!!!! ATTENTION !!!!!!!!!');
        $this->info('This package will run migrations and change your database.');
        $this->info('Make a backup before continuing.');
        $this->newLine();

        $this->askToRunMigrations();

        if ($this->askToRunMigrations === false) {
            $this->comment('Consider leaving a star in the repository and helping us to be better.');
            return 0;
        }

        $this->askToRunSeeds();

        // $this->publishConfigFile();

        $this->askToStarRepoOnGitHub();

        $this->info('You do not find the happy life. You make it.');
        return 1;
    }

    public function publishConfigFile(): self
    {
        $this->comment("Publishing config ...");
        $this->callSilently('vendor:publish', [
            '--tag' => 'lwwcas-countries-config',
        ]);

        $this->newLine();
        return $this;
    }

    public function askToRunSeeds(): self
    {
        $languages = array_keys($this->languages);

        $this->comment('Running seeds...');
        $this->info('English is the default language and must be installed.');
        $this->info('However, other translations are optional.');
        $this->info('The following translations are available:');

        $this->table(
            ['Language'],
            [$languages]
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

            if (in_array('None', $selectedLanguages)) {
                $this->info('You chose not to install any additional languages.');
            } else {
                $this->info('You have selected the following languages:');
                $this->info(implode(', ', $selectedLanguages));
            }

            $languagesConfirmed = $this->confirm('Do you want to choose again?', false);
        } while ($languagesConfirmed);

        $this->comment('Running languages...');
        $this->callSilently('db:seed', [
            '--class' => LwwcasDatabaseSeeder::class,
        ]);
        $this->comment('English executed successfully.');

        $this->runSeeds($selectedLanguages);

        $this->newLine();
        return $this;
    }

    public function runSeeds(array $selectedLanguages): self
    {
        $filteredLanguages = collect($this->languages)
            ->filter(function ($class, $language) use ($selectedLanguages) {
                return in_array($language, $selectedLanguages);
            })
            ->all(); // Converte de volta para array se necessário

        if (in_array('None', $selectedLanguages)) {
            return $this;
        }

        foreach ($filteredLanguages as $language => $class) {
            $this->callSilently('db:seed', [
                '--class' => $class,
            ]);
            $this->comment("{$language} executed successfully.");
        }

        $this->info('Seeds executed successfully!');
        return $this;
    }

    public function askToRunMigrations(): self
    {
        if ($this->confirm('Would you like to run the migrations now?')) {
            $this->comment('Running migrations...');

            $this->callSilently('vendor:publish', [
                '--tag' => 'lwwcas-countries-migrations',
            ]);

            $this->call('migrate');
            $this->comment('Publishing migrations...');

            $this->info('Migrations executed successfully!');
            $this->askToRunMigrations = true;
        }

        $this->newLine();
        return $this;
    }

    public function askToStarRepoOnGitHub(): self
    {
        $this->info('Consider leaving a star in the repository and helping us to be better.');

        if ($this->confirm('Would you like to star our repo on GitHub?')) {
            $repoUrl = $this->gitHubUrl;

            if (PHP_OS_FAMILY == 'Darwin') {
                exec("open {$repoUrl}");
            }
            if (PHP_OS_FAMILY == 'Windows') {
                exec("start {$repoUrl}");
            }
            if (PHP_OS_FAMILY == 'Linux') {
                exec("xdg-open {$repoUrl}");
            }
        }

        $this->newLine();
        return $this;
    }

}
