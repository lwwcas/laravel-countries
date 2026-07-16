<p align="center">
  <img src="./docs/assets/hero-map.webp" alt="Laravel Countries — Eloquent country database package for Laravel with ISO codes, flags, GeoJSON and translations" width="100%">
</p>

<h1 align="center">Laravel Countries</h1>

<p align="center"><strong>The Eloquent-first country database for Laravel — every ISO code, flag, GeoJSON border and translation, one <code>Country::</code> call away.</strong></p>

<p align="center">
  <a href="https://github.com/lwwcas/laravel-countries/releases"><img src="https://img.shields.io/github/v/release/lwwcas/laravel-countries?style=flat-square&color=%23ff6f30" alt="Latest release"></a>
  <a href="https://github.com/lwwcas/laravel-countries/actions/workflows/ci.yml"><img src="https://img.shields.io/github/actions/workflow/status/lwwcas/laravel-countries/ci.yml?style=flat-square&label=tests&color=%23ff6f30" alt="Tests"></a>
  <a href="https://packagist.org/packages/lwwcas/laravel-countries"><img src="https://img.shields.io/packagist/php-v/lwwcas/laravel-countries?style=flat-square&color=%23ff6f30" alt="PHP version"></a>
  <a href="https://packagist.org/packages/lwwcas/laravel-countries"><img src="https://img.shields.io/packagist/dt/lwwcas/laravel-countries?style=flat-square&color=%23ff6f30" alt="Total downloads"></a>
  <a href="https://packagist.org/packages/lwwcas/laravel-countries"><img src="https://img.shields.io/packagist/stars/lwwcas/laravel-countries?style=flat-square&color=%23ff6f30" alt="Stars"></a>
  <a href="https://github.com/lwwcas/laravel-countries/graphs/contributors"><img src="https://img.shields.io/github/contributors/lwwcas/laravel-countries?style=flat-square&color=%23ff6f30" alt="Contributors"></a>
  <a href="https://github.com/lwwcas/laravel-countries/commits/master"><img src="https://img.shields.io/github/last-commit/lwwcas/laravel-countries?style=flat-square&color=%23ff6f30" alt="Last commit"></a>
  <a href="LICENSE.md"><img src="https://img.shields.io/packagist/l/lwwcas/laravel-countries?style=flat-square&color=%23ff6f30" alt="License"></a>
</p>

<p align="center">📚 <a href="https://lwwcas.github.io/laravel-countries/"><strong>Full documentation</strong></a> — this README is just the quick-start version</p>

---

**Laravel Countries** is an Eloquent-first package that models the entire world as native Laravel relationships: **ISO 3166 codes** (Alpha-2, Alpha-3, numeric), **international phone codes**, **currencies**, **national flags** (SVG, emoji, HEX/RGB colors), **GeoJSON borders**, **geographic coordinates**, **demographics**, **GDP**, **independence dates** and **region hierarchies** — all translated into **9 languages** and seeded straight into *your own* database.

No external APIs. No JSON files to fetch, parse and cache yourself. No stale array copy-pasted from a gist. Install the package, run one Artisan command, and countries behave like any other Eloquent model in your app — queryable, relatable, cacheable, testable.

> ### ⭐ Enjoying this package?
>
> If Laravel Countries saved you some time, consider leaving a star on the repo. It's free, takes two seconds, and it's the main way other developers find this project.
>
> **[👉 Star Laravel Countries on GitHub](https://github.com/lwwcas/laravel-countries)**

### On this page

[Why Laravel Countries?](#-why-laravel-countries) • [Features](#-features) • [Data Model](#-data-model) • [Available Languages](#-available-languages) • [Getting Started](#-getting-started) • [Usage](#-usage--query-examples) • [Testing](#-testing) • [Contributing](#-contributing)

## 🤔 Why Laravel Countries?

Most "country list" packages for PHP give you a static array or a JSON file with a name and a two-letter code — fine for a dropdown, useless for anything real.

Laravel Countries is built for applications that actually **do something** with country data:

- **It's a real Eloquent model, not a helper function.** `Country::whereIso('BR')->first()` behaves like any other model — relationships, scopes, eager loading, caching, all included.
- **It lives in your database, not in a vendor JSON file.** Link a `country_id` foreign key to `users`, `addresses`, `orders` — whatever your app needs — with a normal Eloquent relationship.
- **It's translated, not just in English.** Country and region names ship pre-translated in 9 languages, reviewed by native-speaking contributors — not machine-translated on the fly.
- **It's geographic, not just alphabetical.** GeoJSON borders and coordinates mean you can actually draw a map, not just print a list.
- **It's tested.** CI-checked against Laravel 11, 12 and 13 with a full Pest suite — not a "works on my machine" side project.
- **It only takes up the space you actually need.** Install just the languages your app uses — add or drop languages later without touching the rest of your data, so your database never carries translations you'll never query.

## ✨ Features

- 🗄️ **Eloquent-native country model** — `Country::` behaves like any other Laravel model: scopes, relationships, eager loading
- 🌐 **ISO 3166 codes** — Alpha-2, Alpha-3 and numeric, all queryable (`whereIso`, `whereIsoAlpha3`, `whereIsoNumeric`)
- ☎️ **International phone codes** — validate and query by dialing code (`wherePhoneCode`)
- 💱 **Currency data** — query countries by currency
- 🏳️ **Flags in 3 formats** — SVG, emoji, and flag colors in HEX/RGB
- 🗺️ **GeoJSON borders + coordinates** — precise geographic data, ready for maps
- 📊 **Demographics & economics** — population, area (km²), GDP
- 🕊️ **Independence dates & bordering countries**
- 🌍 **Region hierarchy** — continents and regions, translated too
- 🗣️ **9 languages built-in** — no separate i18n package needed (see table below)
- 🧩 **Install only the languages you need** — pick them at install time, then add or remove languages whenever you want, keeping your database lean instead of seeding all 9 by default
- ⚡ **One Artisan command** to install and seed everything, idempotent and CI-safe
- ✅ **Tested with Pest**, CI-checked against Laravel 11, 12, and 13
- 🚫 **Zero external API calls** — everything is seeded once, queried locally, forever

## 🗺️ Data Model

A quick look at what's on the `Country` model (full reference in the [Method Listing docs](https://lwwcas.github.io/laravel-countries/country/method-listing.html)):

| Category | Fields / capabilities |
|---|---|
| **Identity** | ISO Alpha-2, ISO Alpha-3, ISO numeric, slug, UID, official name |
| **Geography** | Latitude/longitude, GeoJSON borders, area (km²), bordering countries |
| **Economy** | Currency, GDP |
| **Demography** | Population |
| **Communication** | International phone code, top-level domain (TLD) |
| **Identity/branding** | Flag (SVG), flag emoji, flag colors (HEX/RGB) |
| **History** | Independence date |
| **Classification** | Region / continent, WMO code |
| **Localization** | Name and region translated in 9 languages |

## 🌍 Available Languages

Every country and region name is translated in all 9 languages below — the table shows how many countries have that language as an official/native language, not translation coverage (translation coverage is 100% across all languages).

You don't have to install all 9. Pick only the languages your app actually serves at install time, and add or remove languages later — Laravel Countries manages the translation rows for you, so your database only ever stores what you're using.

| Language   | Flag | Country        | Countries where it's an official language |
|------------|------|----------------|----------------------------------------------|
| Arabic     | 🇸🇦   | Saudi Arabia   | 25                                            |
| Dutch      | 🇳🇱   | Netherlands    | 3                                              |
| English    | 🇬🇧   | United Kingdom | 67                                             |
| German     | 🇩🇪   | Germany        | 6                                              |
| Italian    | 🇮🇹   | Italy          | 4                                              |
| Portuguese | 🇧🇷   | Brazil         | 9                                              |
| Russian    | 🇷🇺   | Russia         | 4                                              |
| Spanish    | 🇪🇸   | Spain          | 21                                             |
| Turkish    | 🇹🇷   | Turkey         | 2                                              |

*Missing a language? [Contributions are welcome](CONTRIBUTING.md) — the guide explains how translations get reviewed.*

## 🚀 Getting Started

Install via Composer:

```sh
composer require lwwcas/laravel-countries
```

Run the installer:

```sh
php artisan w-countries:install
```

That's it — the countries table is seeded and ready to query.

### Production / CI (Laravel 11, 12, and 13)

In production, use `--force` to skip confirmation prompts:

```sh
php artisan w-countries:install --force
```

If migrations already ran during deploy and you only need the data:

```sh
php artisan w-countries:seed --languages=en,pt,es
```

To list the equivalent manual `db:seed` commands:

```sh
php artisan w-countries:seed --show-commands
```

See the [Seeders documentation](https://lwwcas.github.io/laravel-countries/setup/seeders.html) for the full production guide and manual seeder class reference.

### 🧩 Manage languages anytime

Only need Portuguese and English today? Only seed those two — there's no need to carry all 9 languages in your database if your app doesn't use them:

```sh
php artisan w-countries:seed --languages=en,pt
```

Adding a new market later (say, Spanish) doesn't mean starting over — install the new language on top of what you already have. The same applies in reverse: if a language is no longer needed, you can remove it without touching the rest of your country data.

Full add/remove workflow and command reference → **[Available Languages docs](https://lwwcas.github.io/laravel-countries/introduction/available-languages.html)**

## 🧑‍💻 Usage & Query Examples

Basic lookups:

```php
use Lwwcas\LaravelCountries\Models\Country;

Country::whereIso('BR')->first();
Country::whereIsoAlpha3('BRA')->first();
Country::whereSlug('brasil')->first();
```

Flags — SVG, emoji, and colors:

```php
$country = Country::whereIso('FR')->first();

$country->flag_svg;    // SVG markup
$country->flag_emoji;  // 🇫🇷
$country->flag_colors; // ['#0055A4', '#FFFFFF', '#EF4135']
```

Phone codes & currency:

```php
Country::wherePhoneCode('+55')->first();
Country::whereGdp(1000)->get(); // GDP in billions USD
```

Geographic data — coordinates & GeoJSON:

```php
$country = Country::whereIso('JP')->first();

$country->latitude;
$country->longitude;
$country->geojson; // ready to drop into any map library
```

Language & region:

```php
Country::whereLanguage('en')->get();
Country::whereLanguages(['en', 'fr'])->get();
```

Looking for relationships, scopes, config, or translation helpers? → **[See the full documentation](https://lwwcas.github.io/laravel-countries/)**

## 🧪 Testing

```sh
composer test
```

## 🤝 Contributing

Contributions, translations, and bug reports are very welcome. Please read [CONTRIBUTING.md](CONTRIBUTING.md) before opening a pull request.

## 👥 Credits

- [Lucas Duarte](https://github.com/lwwcas)
- [Saad Batwa](https://github.com/Saad5400) — detailed review and corrections of Arabic country translations ([PR #45](https://github.com/lwwcas/laravel-countries/pull/45))
- [İlyas Özkurt](https://github.com/ilyasozkurt) — Turkish language translations ([PR #36](https://github.com/lwwcas/laravel-countries/pull/36))
- [All Contributors](../../contributors)

## 📄 License

The MIT License (MIT). Please see [LICENSE.md](LICENSE.md) for more information.

---

<p align="center">Made with ❤️ for the Laravel community</p>
