<?php

namespace Lwwcas\LaravelCountries\Trait;

use RuntimeException;

trait WithBasePackageTools
{
    /**
     * Set the name of the package.
     */
    public string $packageName = 'lwwcas-countries';

    /**
     * Set the github Url of the package.
     */
    protected string $githubUrl = 'https://github.com/lwwcas/laravel-countries';

    /**
     * Ask the user if they want to run the migrations.
     */
    protected bool $askToRunMigrations = false;

    /**
     * Phrase of motivation.
     */
    protected ?string $withEnd = null;

    /**
     * Array of motivational phrases.
     *
     * @var string[]
     */
    protected array $withRandomEnd = [
        'Believe in your power to make a difference.',
        'Every step forward is a step closer to your dreams.',
        'Challenges are opportunities in disguise.',
        'Your journey is yours to create.',
        'Great things take time, so keep going.',
        'The effort you put in today builds your tomorrow.',
        'Dreams become reality with action.',
        'You are stronger than you think.',
        'Every achievement starts with the decision to try.',
        'Your potential is limitless.',
        'Progress, not perfection, is the goal.',
        'Shine your light, even when it’s hard.',
        'Courage grows with every challenge you face.',
        'You hold the key to your success.',
        'Embrace the process, and the results will follow.',
        'Inspiration is found within.',
        'Celebrate the small victories—they lead to big ones.',
        'Keep pushing, even when it gets tough.',
        'Success is built one step at a time.',
        'Believe in the magic of your ideas.',
        'Hard work always pays off.',
        'Be the change you wish to see.',
        'Take pride in how far you’ve come.',
        'Setbacks are just setups for comebacks.',
        'You’re creating something amazing.',
        'Stay motivated and focused on your goals.',
        'Learn, grow, and keep moving forward.',
        'You’re capable of incredible things.',
        'Progress fuels passion—never give up.',
        'Trust the process and trust yourself.',
        'Keep dreaming big and working hard.',
        'Your creativity is a gift to the world.',
        'Keep building, and watch your dreams soar.',
    ];

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

    }

    /**
     * Determine if the user chose to run the migrations.
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
        if ($this->withEnd != null) {
            $this->info($this->withEnd);

            return $this;
        }

        if (count($this->withRandomEnd) >= 1) {
            $this->withEnd = $this->withRandomEnd[array_rand($this->withRandomEnd)];
        }

        $this->info($this->withEnd);

        return $this;
    }
}
