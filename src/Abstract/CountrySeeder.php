<?php

namespace Lwwcas\LaravelCountries\Abstract;

use Illuminate\Database\Seeder;
use Lwwcas\LaravelCountries\Contracts\CountrySeedInterface;

abstract class CountrySeeder extends Seeder implements CountrySeedInterface
{

    /**
     * Attribute that defines the language of the country.
     * Defaults to 'en' for English.
     *
     * @var string
     */
    public ?string $lang = 'en';

    /**
     * Attribute that defines the region of the country.
     * Stores regional information like continent or geographical region.
     *
     * @var string
     */
    public ?string $region = null;

    /**
     * The common name of the country.
     * Example: 'United States'.
     *
     * @var string
     */
    public ?string $name = null;

    /**
     * The official name of the country.
     * Example: 'United States of America'.
     *
     * @var string
     */
    public ?string $official_name = null;

    /**
     * ISO 3166-1 Alpha-2 code of the country (two-letter country code).
     * Example: 'US' for United States.
     *
     * @var string
     */
    public ?string $iso_alpha_2 = null;

    /**
     * ISO 3166-1 Alpha-3 code of the country (three-letter country code).
     * Example: 'USA' for United States.
     *
     * @var string
     */
    public ?string $iso_alpha_3 = null;

    /**
     * ISO 3166-1 Numeric code of the country.
     * Example: '840' for United States.
     *
     * @var string
     */
    public ?string $iso_numeric = null;

    /**
     * International phone code of the country.
     * Example: '1' for United States.
     *
     * @var string
     */
    public ?string $international_phone = null;

    /**
     * Array of languages spoken in the country.
     * Stores language codes based on ISO 639-1.
     * Example: ['en', 'es'] for English and Spanish.
     *
     * @var array
     */
    public ?array $languages = null;

    /**
     * Array of top-level domains (TLD) used by the country.
     * Example: ['.us'] for the United States.
     *
     * @var array
     */
    public ?array $tld = null;

    /**
     * Array of alternative top-level domains (TLD) used by the country.
     * Example: ['.gov.us', '.mil.us'] for the United States.
     *
     * @var array
     */
    public ?array $alternative_tlds = null;

    /**
     * Array that defines average internet speeds for the country.
     * Contains average speeds for both fixed and mobile internet connections.
     * Example: ['average_fixed' => 50, 'average_mobile' => 25] (Mbps).
     *
     * @var array
     */
    public ?array $internet_speed = null;

    /**
     * Internet penetration percentage in the country.
     * Represents the percentage of the population with internet access.
     *
     * @var string
     */
    public ?string $internet_penetration = null;

    /**
     * The name of the country's cybersecurity agency.
     * Example: 'CISA' for the United States.
     *
     * @var string
     */
    public ?string $cybersecurity_agency = null;

    /**
     * Array of popular technologies and platforms used in the country.
     * Example: ['AWS', 'Google Cloud'].
     *
     * @var array
     */
    public ?array $popular_technologies = null;

    /**
     * World Meteorological Organization (WMO) country code.
     * Example: 'US' for United States.
     *
     * @var string
     */
    public ?string $wmo = null;

    /**
     * The GeoNames ID for the country, used in the GeoNames geographical database.
     * Example: '6252001' for United States.
     *
     * @var string
     */
    public ?string $geoname_id = null;

    /**
     * Array of currency information for the country.
     * Example: ['name' => 'Dollar', 'code' => 'USD', 'symbol' => '$'].
     *
     * @var array
     */
    public ?array $currency = null;

    /**
     * Population of the country.
     * Example: 331000000 for United States.
     *
     * @var int
     */
    public ?int $population = null;

    /**
     * The area of the country in square kilometers.
     * Example: 9833517 for United States.
     *
     * @var int
     */
    public ?int $area = null;

    /**
     * The capital city of the country.
     * Example: 'Washington D.C.' for United States.
     *
     * @var string
     */
    public ?string $capital = null;

    /**
     * Array of timezones applicable to the country.
     * Example: ['America/New_York', 'America/Los_Angeles'] for United States.
     *
     * @var array
     */
    public ?array $timezones = null;

    /**
     * The country's independence day (if applicable).
     * Example: '1776-07-04' for the United States.
     *
     * @var string
     */
    public ?string $independence_day = null;

    /**
     * Array of international organizations the country is a member of.
     * Example: ['UN', 'WTO', 'NATO'].
     *
     * @var array
     */
    public ?array $international_organizations = null;

    /**
     * Gross Domestic Product (GDP) of the country in billions of USD.
     * Example: 21433 for United States.
     *
     * @var int
     */
    public ?int $gdp = null;

    /**
     * Array of major religions practiced in the country.
     * Example: ['Christianity', 'Islam'].
     *
     * @var array
     */
    public ?array $religions = null;

    /**
     * The form of government of the country.
     * Example: 'Federal Republic' for United States.
     *
     * @var string
     */
    public ?string $government = null;

    /**
     * The national sport of the country (if applicable).
     * Example: 'Baseball' for United States.
     *
     * @var string
     */
    public ?string $national_sport = null;

    /**
     * Array of neighboring countries, including their names and ISO Alpha-2 codes.
     * Example: [['name' => 'Canada', 'iso_alpha_2' => 'CA']].
     *
     * @var array
     */
    public ?array $borders = [];

    /**
     * Array representing the country's flag emoji and Unicode code points.
     * Example: ['img' => '🇺🇸', 'uCode' => 'U+1F1FA U+1F1F8'].
     *
     * @var array
     */
    public ?array $emoji = null;

    /**
     * Array of colors in the country's flag.
     * Example: ['blue', 'red', 'white'].
     *
     * @var array
     */
    public ?array $flag_colors = null;

    /**
     * Array representing the geographical coordinates of the country.
     * Example: ['latitude' => '37.0902', 'longitude' => '-95.7129'].
     *
     * @var array
     */
    public ?array $coordinates = null;

    /**
     * Array containing geographical boundary information of the country.
     * Example: ['north' => '49.384358', 'south' => '24.396308'].
     *
     * @var array
     */
    public ?array $geographical = null;


}
