<p align="center">
  <img src="ssets/map.jpg" />
</p>

# Very short description of the package

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lwwcas/laravel-countries.svg?style=flat-square)](https://packagist.org/packages/lwwcas/laravel-countries)
[![Build Status](https://img.shields.io/travis/lwwcas/laravel-countries/master.svg?style=flat-square)](https://travis-ci.org/lwwcas/laravel-countries)
[![Quality Score](https://img.shields.io/scrutinizer/g/lwwcas/laravel-countries.svg?style=flat-square)](https://scrutinizer-ci.com/g/lwwcas/laravel-countries)
[![Total Downloads](https://img.shields.io/packagist/dt/lwwcas/laravel-countries.svg?style=flat-square)](https://packagist.org/packages/lwwcas/laravel-countries)

## Requirements
- [PHP](https://github.com/php) >=^7.3|^8.0
- [laravel/framework](https://github.com/laravel/framework) >=^8.12
- [dimsav/laravel-translatable](https://github.com/Astrotomic/laravel-translatable) >=^11.8

## Installation

You can install the package via composer:

```bash
composer require lwwcas/laravel-countries
composer dump-autoload
```

- Put this line into database\seeds\DatabaseSeeder.php in run function
```php
$this->call(\Lwwcas\LaravelCountries\Database\Seeders\LcDatabaseSeeder::class);
```

- Run migrations
```bash
php artisan migrate
```
- Run seeds or only the LcDatabaseSeeder class
```bash
php artisan db:seed
```

## Usage

``` php
// Usage description here
```

### Testing

``` bash
composer test
```

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

### Security

If you discover any security related issues, please email lwwcas@gmail.com instead of using the issue tracker.

## Credits

- [Lucas Duarte](https://github.com/lwwcas)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
