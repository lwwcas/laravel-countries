<?php

namespace Lwwcas\LaravelCountries\Trait;

use RuntimeException;

trait WithBasePackageTools
{
    /**
     * Set the name of the package.
     *
     * @var string
     */
    public string $packageName = 'lwwcas-countries';

    /**
     * Set the github Url of the package.
     *
     * @var string
     */
    protected string $githubUrl = 'https://github.com/lwwcas/laravel-countries';

    /**
     * Ask the user if they want to run the migrations.
     *
     * @var bool
     */
    protected bool $askToRunMigrations = false;

    /**
     * Phrase of motivation.
     *
     * @var string
     */
    protected string $withEnd = 'You do not find the happy life. You make it.';

    /**
     * Ask the user if they want to star the repository on GitHub.
     *
     * @return $this
     */
    public function askToStarRepoOnGitHub(): self
    {
        if ($this->confirm('Would you like to star our repo on GitHub?', false)) {
            $this->openInBrowser($this->githubUrl);
        }

        return $this;
    }

    /**
     * Open the given URL in the user's default browser.
     *
     * @param  string  $url
     * @return void
     */
    protected function openInBrowser(string $url): void
    {
        $command = match (PHP_OS_FAMILY) {
            'Darwin' => "open {$url}",
            'Windows' => "start {$url}",
            'Linux' => "xdg-open {$url}",
            default => throw new RuntimeException('Unsupported operating system'),
        };

        exec($command);
        return;
    }

    /**
     * Determine if the user chose to run the migrations.
     *
     * @return bool
     */
    public function hasRunMigrations(): bool
    {
        return $this->askToRunMigrations;
    }

    /**
     * Set the flag to true that indicates that the migrations should be run.
     *
     * @return $this
     */
    public function setTrueRunMigrations(): self
    {
        $this->askToRunMigrations = true;
        return $this;
    }

    /**
     * Display a warning message to the user, informing them that the package
     * will run migrations and change their database. It will also instruct
     * them to make a backup before continuing.
     *
     * @return $this
     */
    public function startWarnings(): self
    {
        $this->error('!!!!!!!!! ATTENTION !!!!!!!!!');
        $this->info('This package will run migrations and/or seeders to change your database.');
        $this->info('Make a backup before continuing.');
        $this->newLine();

        return $this;
    }

    /**
     * Print a message with a phrase of motivation.
     *
     * @return $this
     */
    public function withEnd(): self
    {
        $this->info($this->withEnd);
        return $this;
    }
}
