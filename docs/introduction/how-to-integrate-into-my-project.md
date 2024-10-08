# How to integrate into my project?

To integrate **Laravel Countries** into your existing project, you can simply add a foreign key in your table to reference the `lc_countries` table. Here's an example of how to set this up:

### Step 1: Add the Foreign Key

In your migration file, add the following code to create the foreign key in your table (e.g., `users` table):

```php
$table->integer('country_id')->unsigned()->nullable();
```

This column will store the reference to the country in the `lc_countries` table.

### Step 2: Add Foreign Key Constraints (Recommended)

Although optional, it's strongly recommended to use Foreign Key Constraints provided by Laravel to ensure data integrity. Here’s how you can do it:

```php
$table->foreign('country_id')->references('id')->on('lc_countries');
```

This code ensures that the country data is correctly linked with your `users` table, and if a country is deleted, the related records will be handled accordingly (e.g., cascading deletes).

## Example Migration for `users` Table

Here’s a full example of how this could look in a migration:

```php:line-numbers {1}
Schema::create('users', function (Blueprint $table) {
    $table->id();
    $table->integer('country_id')->unsigned()->nullable(); // [!code focus]
    $table->uuid('uuid');
    $table->string('slug');
    $table->string('name');
    $table->string('first_name');
    $table->string('last_name');
    $table->string('email')->unique();
    $table->timestamp('email_verified_at')->nullable();
    $table->string('password');
    $table->string('access_code')->nullable();
    $table->rememberToken();
    $table->timestamps();

    $table->foreign('country_id')->references('id')->on('lc_countries'); // [!code focus]
});

```

By adding this relationship, your `users` table is now linked with the `lc_countries` table, allowing you to easily retrieve the country associated with each us

## Relationships for `User`

To establish a relationship between a `User` and the countries associated with their region, you can easily add the following code to your `User.php`:

```php:line-numbers {1}
use Lwwcas\LaravelCountries\Models\Country;

/**
 * Get the countries that are located in this region.
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
public function countries()
{
    return $this->hasMany(Country::class, 'lc_region_id'); // [!code focus]
}

```

By doing this, the `User` model will be able to retrieve the countries that belong to the region identified by `lc_region_id`.

### Why Use `'lc_region_id'`?

While passing `'lc_region_id'` as the foreign key is *optional*, it is strongly recommended to ensure your relationship remains clear and well-structured.
By explicitly defining the foreign key, you eliminate ambiguity and make your codebase more maintainable for yourself and other developers.

## ER model

### Entity–relationship model

![EER Model](/assets/EER-countries.png)

## Supported Databases

The **Laravel Countries** package has been tested and works perfectly with the following databases:

> **Note**: There is a very high chance that this package will work perfectly with other relational databases as well. However, since they have not been tested, we cannot guarantee full compatibility.

### 1. **MySQL**

<img src="/assets/my-sql-logo.png" alt="MySQL Logo" style="max-height: 200px;">

**MySQL** is one of the most popular relational databases, widely used in web applications.

- **Pros**:
  - High performance for read-heavy operations.
  - Strong support from the open-source community.
  - Supports complex queries and large datasets.

- **Cons**:
  - Can become slower with very large write operations.
  - Some advanced features (like full-text search) are less powerful compared to PostgreSQL.

### 2. **SQLite**

<img src="/assets/sql-lite-logo.png" alt="SqLite Logo" style="max-height: 100px;">

**SQLite** is a lightweight, serverless database that stores data in a single file. It’s often used in testing or lightweight applications.

- **Pros**:
  - No setup required; the entire database is stored in a single file.
  - Fast for small to medium-sized applications or for development environments.

- **Cons**:
  - Not ideal for large-scale applications or high-concurrency environments.
  - Limited support for some advanced database features like complex JOINs.

### 3. **PostgreSQL**

<img src="/assets/postgresql-logo.png" alt="PostgreSQL Logo" style="max-height: 200px;">

**PostgreSQL** is a highly advanced, open-source relational database known for its robustness and support for complex queries.

- **Pros**:
  - Supports complex queries, advanced indexing, and custom data types.
  - Great for large datasets and write-heavy operations.
  - Strong support for ACID compliance and data integrity.

- **Cons**:
  - Slightly more complex to configure and manage compared to MySQL.
  - Can require more resources (memory and storage) than simpler databases like SQLite.

Each of these databases offers unique strengths, and **Laravel Countries** works seamlessly with them, allowing you to choose the one that best suits your project's needs.


## Migrations

When you install **Laravel Countries**, the following database migrations will be executed to create the necessary table structure for storing countries, regions, geographical data, and translations.

Here is an overview of the migrations:
Below is a breakdown of each column and its purpose:

## `Countries` Table

| Column Name            | Description                                                                                              |
|------------------------|----------------------------------------------------------------------------------------------------------|
| `id`                   | The primary key for the table. *(integer, auto-increment)*                                               |
| `lc_region_id`         | The foreign key linking to the `lc_regions` table. *(tinyInteger, unsigned)*                             |
| `uid`                  | A unique identifier for the country record. *(ulid, unique)*                                             |
| `official_name`        | The official name of the country. *(string)*                                                             |
| `capital`              | The name of the country's capital. *(string)*                                                            |
| `iso_alpha_2`          | The two-letter ISO 3166-1 alpha-2 country code. *(string, length: 10)*                                   |
| `iso_alpha_3`          | The three-letter ISO 3166-1 alpha-3 country code. *(string, length: 10)*                                 |
| `iso_numeric`          | The ISO 3166-1 numeric country code. *(smallInteger, nullable)*                                          |
| `international_phone`  | The international dialing code for the country. *(string, nullable, length: 150)*                        |
| `geoname_id`           | The ID linking to the GeoNames geographical database. *(string, nullable, length: 10)*                   |
| `wmo`                  | Country abbreviations by the World Meteorological Organization (WMO). *(string, nullable)*               |
| `independence_day`     | The year the country gained independence. *(year, nullable)*                                             |
| `population`           | The population of the country. *(smallInteger, nullable)*                                                |
| `area`                 | The total area of the country in square kilometers. *(smallInteger, nullable)*                           |
| `gdp`                  | The gross domestic product (GDP) of the country in billions of USD. *(string, nullable)*                 |
| `languages`            | A list of languages spoken in the country in JSON format. *(json, default: [])*                          |
| `tld`                  | The top-level domains (TLDs) associated with the country. *(json, default: [])*                          |
| `alternative_tld`      | Alternative top-level domains (TLDs) associated with the country. *(json, default: [])*                  |
| `borders`              | A list of countries that share a border with this country. *(json, default: [])*                         |
| `timezones`            | The timezones associated with the country. *(json, default: {main: [], others: []})*                     |
| `currency`             | Detailed currency information including name, code, symbol, unit, banknotes, and coins. *(json, default: {...})* |
| `flag_emoji`           | The emoji representation of the country's flag. *(json, default: [])*                                    |
| `flag_colors`          | The colors that make up the country's flag. *(json, default: [])*                                        |
| `flag_colors_web`      | The web-safe colors used for the country's flag. *(json, default: [])*                                   |
| `flag_colors_contrast` | Contrast colors to ensure text legibility on top of the flag's colors. *(json, default: [])*             |
| `flag_colors_hex`      | The hexadecimal color codes of the flag. *(json, default: [])*                                           |
| `flag_colors_rgb`      | The RGB values of the flag's colors. *(json, default: [])*                                               |
| `flag_colors_cmyk`     | The CMYK values of the flag's colors. *(json, default: [])*                                              |
| `flag_colors_hsl`      | The HSL values of the flag's colors. *(json, default: [])*                                               |
| `flag_colors_hsv`      | The HSV values of the flag's colors. *(json, default: [])*                                               |
| `flag_colors_pantone`  | The Pantone color codes of the flag. *(json, default: [])*                                               |
| `visible`              | Indicates whether the country is visible in the system. *(boolean, default: true)*                       |
| `timestamps`           | Auto-generated timestamps for when the record is created or updated. *(created_at, updated_at)*          |
| `unique`               | Ensures uniqueness based on the region and ISO Alpha-2 code. *((lc_region_id, iso_alpha_2))*             |
| `foreign key`          | Links to the `lc_regions` table, with cascading deletes. *((lc_region_id))*                              |



## `Regions` Table

| Column Name   | Description                                                                                                     |
|---------------|-----------------------------------------------------------------------------------------------------------------|
| `id`          | The primary key of the table, automatically incremented. *(tinyIncrements)*                                     |
| `iso_alpha_2` | ISO 3166-1 Alpha-2 code. *(string, length: 10)*                                                                 |
| `icao`        | International Civil Aviation Organization (ICAO) region. *(string, length: 10)*                                 |
| `iucn`        | International Union for Conservation of Nature (IUCN) region. *(string, length: 10)*                            |
| `tdwg`        | World Geographical Scheme for Recording Plant Distributions code. *(string, length: 10)*                        |
| `is_visible`  | Visibility status, defaulting to `true`. *(boolean, default: true)*                                             |


## `Coordinates` Table


| Column Name                   | Description                                                                            |
|-------------------------------|----------------------------------------------------------------------------------------|
| `id`                          | The primary key of the table, automatically incremented. *(increments)*                |
| `lc_country_id`               | The foreign key linking to the `lc_countries` table. *(integer, unsigned)*             |
| `latitude`                    | The latitude coordinate. *(string, nullable)*                                          |
| `longitude`                   | The longitude coordinate. *(string, nullable)*                                         |
| `degrees_with_decimal`        | Coordinates in degrees with decimal format. *(string, nullable)*                       |
| `degrees_minutes_seconds`     | Coordinates in degrees, minutes, and seconds format. *(string, nullable)*              |
| `degrees_and_decimal_minutes` | Coordinates in degrees and decimal minutes format. *(string, nullable)*                |
| `gps`                         | GPS data in JSON format. *(json, nullable)*                                            |

## `Geographical` Table

| Column Name     | Description                                                                           |
|-----------------|---------------------------------------------------------------------------------------|
| `id`            | The primary key of the table, automatically incremented. *(increments)*               |
| `lc_country_id` | The foreign key linking to the `lc_countries` table. *(integer, unsigned)*            |
| `type`          | The type of the geographical data. *(string)*                                         |
| `features_type` | The feature type of the geographical data. *(string)*                                 |
| `properties`    | Additional properties stored in JSON format. *(json)*                                 |
| `geometry`      | Geometrical data stored in JSON format. *(json)*                                      |

## `Extras` Table

| Column Name                   | Description                                                                                                 |
|-------------------------------|-------------------------------------------------------------------------------------------------------------|
| `id`                          | Primary key: auto-incremented extra information ID. *(increments)*                                          |
| `lc_country_id`               | Foreign key linking to the `lc_countries` table. *(integer, unsigned)*                                      |
| `national_sport`              | The national sport of the country, if applicable. *(string, nullable)*                                      |
| `cybersecurity_agency`        | Name of the country's national cybersecurity agency. *(string, nullable)*                                   |
| `popular_technologies`        | A list of popular technologies used in the country (e.g., programming languages, platforms). *(json, nullable)* |
| `internet`                    | Information about the country's internet infrastructure, including speed and penetration. *(json, nullable)* |
| `religions`                   | A list of religions practiced in the country. *(json, nullable)*                                            |
| `international_organizations` | A list of international organizations the country is a member of (e.g., UN, WTO). *(json, nullable)*        |


> **Tip**: You can visualize the table relationships in the EER diagram above, which highlights how these tables are connected.
