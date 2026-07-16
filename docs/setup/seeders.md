---
title: "Seeders — Laravel Countries"
description: "How the Laravel Countries seeders populate ISO codes, flags, coordinates and translations into your database."
head:
  - - meta
    - property: og:title
      content: "Seeders — Laravel Countries"
  - - meta
    - property: og:description
      content: "How the Laravel Countries seeders populate ISO codes, flags, coordinates and translations into your database."
---

# 🌱 Seeders

> Popule seu banco de dados com **países, regiões e traduções** em poucos comandos — do ambiente local à produção. 🚀

After migrations are in place, **Laravel Countries** populates countries, regions, and translations through language seeders. This page covers the recommended install flow, production deployment, and how to run seeders manually when needed.

---

## 📚 Table of contents

- [🚀 Quick install](#-quick-install-local-development)
- [🏭 Production deployment](#-production-deployment-laravel-11-12-and-13)
- [⚠️ Why `--force` is required](#️-why---force-is-required-in-production)
- [🔧 Custom database connection](#-custom-database-connection)
- [📋 Related commands](#-related-commands)
- [✅ Cheat sheet](#-cheat-sheet)

---

## 🚀 Quick install (local development)

```bash
php artisan w-countries:install
```

> 💡 **Tip:** the interactive installer walks you through migrations, language selection, and config publishing — perfect for getting started locally with zero guesswork.

---

## 🏭 Production deployment (Laravel 11, 12, and 13)

In production, Laravel requires explicit confirmation before running seeders. **No worries** — the package handles this automatically whenever you use the built-in commands with `--force`. ✅

<br>

### 1️⃣ Full non-interactive install

Use this when you want **migrations + seeders + config publishing** in a single step:

```bash
php artisan w-countries:install --force
```

| 🎯 Goal | Command |
|---|---|
| Seed English only *(default)* | `php artisan w-countries:install --force` |
| Seed specific languages | `php artisan w-countries:install --force --languages=en,pt,es` |
| Seed **all** available languages | `php artisan w-countries:install --force --languages=all` |

<br>

### 2️⃣ Seed only *(migrations already deployed)*

🔥 **The most common production scenario:** migrations ran during deploy, and you only need the data.

```bash
php artisan w-countries:seed
```

| 🎯 Goal | Command |
|---|---|
| Seed specific languages | `php artisan w-countries:seed --languages=en,pt,es` |
| Seed **all** languages | `php artisan w-countries:seed --all` |

<br>

### 3️⃣ Manual `db:seed` commands

If you prefer running Laravel's native seeder command directly, **always pass `--force` in production**. Replace `mysql` with your connection name when using a custom database (see [Supported Databases](/setup/supported-databases#custom-database-connection)).

**🇬🇧 English — required, includes all countries and regions:**

```bash
php artisan db:seed --class="Lwwcas\LaravelCountries\Database\Seeders\LwwcasDatabaseSeeder" --database=mysql --force
```

<details>
<summary>🌍 <strong>Click to expand — all additional language seeders</strong></summary>

<br>

| Language | Locale | Seeder class |
|---|:---:|---|
| 🇸🇦 Arabic | `ar` | `Lwwcas\LaravelCountries\Database\Seeders\Languages\ArabicLanguageSeeder` |
| 🇳🇱 Dutch | `nl` | `Lwwcas\LaravelCountries\Database\Seeders\Languages\DutchLanguageSeeder` |
| 🇫🇷 French | `fr` | `Lwwcas\LaravelCountries\Database\Seeders\Languages\FrenchLanguageSeeder` |
| 🇩🇪 German | `de` | `Lwwcas\LaravelCountries\Database\Seeders\Languages\GermanLanguageSeeder` |
| 🇮🇹 Italian | `it` | `Lwwcas\LaravelCountries\Database\Seeders\Languages\ItalianLanguageSeeder` |
| 🇵🇹 Portuguese | `pt` | `Lwwcas\LaravelCountries\Database\Seeders\Languages\PortugueseLanguageSeeder` |
| 🇷🇺 Russian | `ru` | `Lwwcas\LaravelCountries\Database\Seeders\Languages\RussianLanguageSeeder` |
| 🇪🇸 Spanish | `es` | `Lwwcas\LaravelCountries\Database\Seeders\Languages\SpanishLanguageSeeder` |
| 🇹🇷 Turkish | `tr` | `Lwwcas\LaravelCountries\Database\Seeders\Languages\TurkishLanguageSeeder` |

</details>

<br>

**Example for Portuguese 🇵🇹:**

```bash
php artisan db:seed --class="Lwwcas\LaravelCountries\Database\Seeders\Languages\PortugueseLanguageSeeder" --database=mysql --force
```

::: tip 💡 Shortcut
Run `php artisan w-countries:seed --show-commands` to print the full list of manual commands for your configured database connection.
:::

---

## ⚠️ Why `--force` is required in production

On Laravel 11, 12, and 13, the `db:seed` command asks for confirmation whenever `APP_ENV=production`. If a command runs seeders silently — without showing that prompt — **the process hangs until input is received**. 🛑

✅ **The fix:** every seed command in this package passes `--force` automatically, so production deploys complete without any interaction.

---

## 🔧 Custom database connection

When using a dedicated connection (for example `countries`), pass it to every command:

```bash
php artisan w-countries:seed --languages=en,pt
```

> The connection is read from `config/w-countries.php` (the `driver` key). Manual commands **must** use that same value for `--database`:

```bash
php artisan db:seed --class="Lwwcas\LaravelCountries\Database\Seeders\LwwcasDatabaseSeeder" --database=countries --force
```

---

## 📋 Related commands

| Command | Purpose |
|---|---|
| 🧩 `w-countries:install` | Full setup: migrations, seeders, config |
| 🌱 `w-countries:seed` | Run language seeders only |
| 🌐 `w-countries:languages` | Install or uninstall languages interactively |

---

## ✅ Cheat sheet

<details>
<summary><strong>📎 Click to see every command at a glance</strong></summary>

<br>

```bash
# Local development
php artisan w-countries:install

# Production — full install
php artisan w-countries:install --force
php artisan w-countries:install --force --languages=en,pt,es
php artisan w-countries:install --force --languages=all

# Production — seed only
php artisan w-countries:seed
php artisan w-countries:seed --languages=en,pt,es
php artisan w-countries:seed --all

# Manual db:seed
php artisan db:seed --class="Lwwcas\LaravelCountries\Database\Seeders\LwwcasDatabaseSeeder" --database=mysql --force

# Custom database connection
php artisan db:seed --class="Lwwcas\LaravelCountries\Database\Seeders\LwwcasDatabaseSeeder" --database=countries --force

# Show all manual commands
php artisan w-countries:seed --show-commands
```

</details>

<br>

<div align="center">

**Precisa de ajuda?** Abra uma [issue no GitHub](https://github.com/lwwcas/laravel-countries/issues) 💬

</div>
