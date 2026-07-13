<p align="center">
  <img src="./docs/assets/hero-map.webp" alt="Laravel Countries" width="100%">
</p>

<h1 align="center">Laravel Countries</h1>

<p align="center"><strong>Every country. Every translation. One Eloquent model away.</strong></p>

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

Laravel Countries drops a complete, already-translated dataset of the world's countries straight into your database — ISO codes, slugs, geographic coordinates, and detailed metadata — ready to query as a plain Eloquent model from the first `Country::` call.

No external APIs, no JSON files to parse and cache yourself. Install the package, run one Artisan command, and countries behave like any other table in your app.

> ### ⭐ Enjoying this package?
>
> If Laravel Countries saved you some time, consider leaving a star on the repo. It's free, takes two seconds, and it's the main way other developers find this project.
>
> **[👉 Star Laravel Countries on GitHub](https://github.com/lwwcas/laravel-countries)**

## ✨ Features

- 🌍 Comprehensive country dataset — ISO codes, slugs, geographic coordinates, and detailed metadata, stored right in your database
- 🗣️ Built-in translations for 9 languages (see table below) — no separate i18n package needed
- 🗄️ Everything lives in **your** database — link countries to any table via Eloquent, no runtime API calls
- ⚡ One Artisan command to install and seed everything
- ✅ Tested with Pest, CI-checked against Laravel 11, 12, and 13

## 🌍 Available Languages

| Language   | Flag | Country        | Number of Countries |
|------------|------|----------------|----------------------|
| Arabic     | 🇸🇦   | Saudi Arabia   | 25                   |
| Dutch      | 🇳🇱   | Netherlands    | 3                    |
| English    | 🇬🇧   | United Kingdom | 67                   |
| German     | 🇩🇪   | Germany        | 6                    |
| Italian    | 🇮🇹   | Italy          | 4                    |
| Portuguese | 🇧🇷   | Brazil         | 9                    |
| Russian    | 🇷🇺   | Russia         | 4                    |
| Spanish    | 🇪🇸   | Spain          | 21                   |
| Turkish    | 🇹🇷   | Turkey         | 2                    |

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

## 🧑‍💻 Usage

```php
use Lwwcas\LaravelCountries\Models\Country;

Country::whereIso('BR')->first();
Country::whereIsoAlpha3('BRA')->first();
Country::whereSlug('brasil')->first();
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
