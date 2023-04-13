
<p  align="center">
<img  src="https://raw.githubusercontent.com/lwwcas/laravel-countries/master/assets/map.jpg" />
</p>

[![Latest Version on Packagist](https://img.shields.io/packagist/v/lwwcas/laravel-countries.svg?style=flat-square)](https://packagist.org/packages/lwwcas/laravel-countries)
[![Total Downloads](https://img.shields.io/packagist/dt/lwwcas/laravel-countries.svg?style=flat-square)](https://packagist.org/packages/lwwcas/laravel-countries)


# Very short description

Laravel-Countries, is a package that contains everything you need to start a new project and have all countries, information and translations on hand.
**And all this optimized for Laravel 8, 9 and now 10.**

The package provides all data directly to your database, allowing you to link to any other table in your database, in a simple and usual way.

<p  align="center">
<img  src="https://raw.githubusercontent.com/lwwcas/laravel-countries/master/assets/EER-countries.png" />
</p>

### Geology and topology maps

Amongst many other information you'll be able to plot country maps:

<p  align="center">
<img  src="https://raw.githubusercontent.com/lwwcas/laravel-countries/master/assets/brazil-map.png" />
</p>



### Available Languages?

| Language |
------------------|
| Arabic |
| Dutch |
| English |
| Italian |
| Portuguese |
| Spanish |

## Requirements


- [PHP](https://github.com/php) >= ^7.3 | ^8.0

- [laravel/framework](https://github.com/laravel/framework) >= ^8.12|^9.0

- [dimsav/laravel-translatable](https://github.com/Astrotomic/laravel-translatable) >= ^11.8


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

You can access all the information in the database with a simple query

```  php
use  Lwwcas\LaravelCountries\Models\Country;

Country::whereIso('BR')->first();
Country::whereIsoAlpha3('BRA')->first();
Country::whereSlug('brasil')->first();

```

<p  align="center">
<img  src="https://raw.githubusercontent.com/lwwcas/laravel-countries/dddd6f3d6c0e6cc0a0e4f761c8d900ce244a52eb/assets/contry_model.svg" />
</p>

## How to integrate into my project?

In your table you can simply add the foreign key.

> Only this will allow you to make a relationship with the country table

```  php
$table->integer('lc_country_id')->unsigned();
```


Being optional, but **strongly recommended**, you should use the [Foreign Key Constraints](https://laravel.com/docs/8.x/migrations#foreign-key-constraints)  that Laravel provides.
```  php
$table->foreign('lc_country_id')->references('id')->on('lc_countries');
```


### Example of implementation in the users table
<p  align="center">
<img  src="https://raw.githubusercontent.com/lwwcas/laravel-countries/dddd6f3d6c0e6cc0a0e4f761c8d900ce244a52eb/assets/user_table_add_lines.svg" />
</p>

#### To make a relationship with the regions table
  ```  php
$table->tinyInteger('lc_region_id')->unsigned();
$table->foreign('lc_region_id')->references('id')->on('lc_regions');
```

## Take a good look at the Model and see the package makes it easy


[Country](https://github.com/lwwcas/laravel-countries/blob/master/src/models/Country.php)


[CountryTranslation](https://github.com/lwwcas/laravel-countries/blob/master/src/models/CountryTranslation.php)



[CountryRegion](https://github.com/lwwcas/laravel-countries/blob/master/src/models/CountryRegion.php)



[CountryRegionTranslation](https://github.com/lwwcas/laravel-countries/blob/master/src/models/CountryRegionTranslation.php)



[CountryGeographical](https://github.com/lwwcas/laravel-countries/blob/master/src/models/CountryGeographical.php)

### Example data



```  json
{
  "id": 30,
  "lc_region_id": 2,
  "uuid": "343d2082-f6fb-42e6-ac7a-f78dad39de31",
  "slug": "brazil",
  "name": "Brazil",
  "official_name": "Federative Republic of Brazil",
  "iso_alpha_2": "BR",
  "iso_alpha_3": "BRA",
  "iso_numeric": 76,
  "geoname_id": "3469034",
  "international_phone": "55",
  "languages": "[pt]",
  "tld": "[.br]",
  "wmo": "BZ",
  "emoji": {
    "img": "🇧🇷",
    "uCode": "U+1F1E7 U+1F1F7"
  },
  "color_hex": [
    "#008000",
    "#ffff00"
  ],
  "color_rgb": [
    "0,128,0",
    "255,255,0"
  ],
  "coordinates": {
    "latitude": {
      "classic": "10 00 S",
      "desc": "-10.81045150756836"
    },
    "longitude": {
      "classic": "55 00 W",
      "desc": "-52.97311782836914"
    }
  },
  "coordinates_limit": {
    "latitude": {
      "max": "5.266667",
      "min": "-33.733333"
    },
    "longitude": {
      "max": "-28.85",
      "min": "-73.75"
    }
  },
  "visible": true,
  "translations": [
    {
      "id": 30,
      "lc_country_id": 30,
      "name": "Brazil",
      "slug": "brazil",
      "locale": "en"
    }
  ]
}

```

### Testing

```  bash
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
