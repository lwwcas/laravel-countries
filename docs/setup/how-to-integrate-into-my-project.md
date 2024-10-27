# How to integrate into my project?

To integrate **Laravel Countries** into your existing project, you can simply add a foreign key in your table to reference the `lc_countries` table. Here's an example of how to set this up:

## Step 1: Add the Foreign Key

In your migration file, add the following code to create the foreign key in your table (e.g., `users` table):

```php
$table->integer('country_id')->unsigned()->nullable();
```

This column will store the reference to the country in the `lc_countries` table.

## Step 2: Add Foreign Key Constraints (Recommended)

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
