---
title: "Getting Started — Install Laravel Countries"
description: "Install the Laravel country database package via Composer and seed ISO codes, flags and translations in minutes."
head:
  - - meta
    - property: og:title
      content: "Getting Started — Install Laravel Countries"
  - - meta
    - property: og:description
      content: "Install the Laravel country database package via Composer and seed ISO codes, flags and translations in minutes."
---

# How install Laravel Countries?

<img src="/assets/hero-map.webp" alt="Hero Map" style="padding-top:35px;">

## 🚀 Getting Started

Install the package quickly via Composer:

```sh
composer require lwwcas/laravel-countries

```

And get started with Artisan

```sh
php artisan w-countries:install

```

<img src="/assets/terminal-install-command.png" alt="Artisan install command" style="padding-top:15px;">

### After the structure is fully set up, you can choose which languages you want to install

<img src="/assets/terminal-install-command-1.png" alt="Artisan install command" style="padding-top:25px;">
<img src="/assets/terminal-install-command-2.png" alt="Artisan install command" style="padding-top:25px;">

### And that's it!
### Now you're ready to create something incredible

## Production deployment

When deploying to production (Laravel 11, 12, or 13), use `--force` so migrations and seeders run without interactive prompts:

```sh
php artisan w-countries:install --force --languages=en,pt,es
```

If migrations already ran during your deploy pipeline, seed the data separately:

```sh
php artisan w-countries:seed --languages=en,pt,es
```

For the full list of manual `db:seed` commands, run:

```sh
php artisan w-countries:seed --show-commands
```

See the [Seeders guide](/setup/seeders) for all options and seeder class names.

<div class="tip custom-block" style="padding-top: 15px">

For details on how to install or uninstall languages, check out the Languages section [Here](/introduction/available-languages#⚙%EF%B8%8F-language-management-features).

</div>
