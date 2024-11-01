
<p  align="center">
    <img src="./docs/assets/hero-map.webp" alt="Hero Map"style="padding-top:15px;">
</p>

<p>
<img decoding="async" loading="lazy" src="https://img.shields.io/github/v/release/lwwcas/laravel-countries?style=flat-square&color=%23ff6f30" alt="release" style=" float: left; padding-right:15px;">

<img decoding="async" loading="lazy" src="https://img.shields.io/github/repo-size/lwwcas/laravel-countries?label=size&amp;style=flat-square&color=%23ff6f30" alt="size" style=" float: left; padding-right:15px;">

<img alt="Packagist Downloads" src="https://img.shields.io/packagist/dt/lwwcas/laravel-countries?style=flat-square&color=%23ff6f30" style=" float: left; padding-right:15px;">

<img alt="Packagist Stars" src="https://img.shields.io/packagist/stars/lwwcas/laravel-countries?style=flat-square&color=%23ff6f30" style=" float: left; padding-right:15px;">

<img alt="Packagist License" src="https://img.shields.io/packagist/l/lwwcas/laravel-countries?style=flat-square&color=%23ff6f30" style=" float: left; padding-right:15px;">

</p>

### [Full Documentation](https://lwwcas.github.io/laravel-countries/)

<br>

## Very short description

<p>
<img src="./docs/assets/logo.png" alt="My Logo" style="max-height: 45px;">
</p>

Laravel Countries is a package that provides everything you need to kickstart a new project with comprehensive country information, including translations. Optimized for Laravel, it ensures efficient access and management of country data.

The package stores all data directly in your database, allowing you to easily link it to any other table in a simple and familiar way using Laravel’s Eloquent ORM.

## 🌍 Available Languages

We currently support the following languages:

| Language      | Flag | Country      | Number of Countries |
|---------------|------|--------------|---------------------|
| Arabic        | 🇸🇦   | Saudi Arabia | 25                  |
| Dutch         | 🇳🇱   | Netherlands  | 3                   |
| English       | 🇬🇧   | United Kingdom| 67                  |
| German        | 🇩🇪   | Germany      | 6                   |
| Italian       | 🇮🇹   | Italy        | 4                   |
| Portuguese    | 🇧🇷   | Brazil       | 9                   |
| Russian       | 🇷🇺   | Russia       | 4                   |
| Spanish       | 🇪🇸   | Spain        | 21                  |

## 🚀 Getting Started

Install the package quickly via Composer:

```sh
composer require lwwcas/laravel-countries
```

And get started with Artisan

```sh
php artisan w-countries:install
```

## Usage

You can access all the information in the database with a simple query

```  php
use  Lwwcas\LaravelCountries\Models\Country;

Country::whereIso('BR')->first();
Country::whereIsoAlpha3('BRA')->first();
Country::whereSlug('brasil')->first();
```

### Testing With Pest Php

```  bash
composer test
```

## Credits

- [Lucas Duarte](https://github.com/lwwcas)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
