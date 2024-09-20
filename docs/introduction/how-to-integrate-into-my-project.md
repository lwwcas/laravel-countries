# How to integrate into my project?

## EER  Model

### Enhanced entity–relationship model

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

## How to Integrate into My Project?

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

### Example Migration for `users` Table

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

## Migrations

When you install **Laravel Countries**, the following database migrations will be executed to create the necessary table structure for storing countries, regions, geographical data, and translations.

Here is an overview of the migrations:

### 1. **lc_countries Table**

This table stores the main country information, such as:

- **UUID**: A unique identifier for each country.
- **Official Name**: The official name of the country.
- **ISO Codes**: Alpha-2, Alpha-3, and numeric ISO codes.
- **International Phone Code**: Country calling codes.
- **Languages**: A JSON field storing the languages spoken in each country.
- **Geoname ID**: A reference to the Geonames database for geographical information.
This table is referenced by other tables, ensuring that all data remains consistent.

### 2. **lc_countries_geographical Table**

This table holds detailed geographical data for each country, including:

- **UUID**: A unique identifier for the geographical data.
- **Type**: The type of geographical feature (e.g., country border).
- **Geometry**: The precise geometry of the country stored as JSON, allowing for detailed mapping.
This is linked to the `lc_countries` table for efficient country-level geographical data management.

### 3. **lc_countries_translations Table**

This table stores translations for country names in different locales. Key fields include:

- **UUID**: Unique identifier.
- **Locale**: The language in which the country name is translated.
- **Name and Slug**: The translated name and URL-friendly version of the country.
This table ensures that your application supports multilingual country names seamlessly.

### 4. **lc_regions Table**

This table manages the regions to which countries belong, with:

- **UUID**: Unique identifier for each region.
Regions provide a way to categorize countries based on their geographical or political grouping.

### 5. **lc_region_translations Table**

This table handles translations for the region names in various languages. Important fields include:

- **Name**: The translated region name.
- **Locale**: The language code (e.g., "en" for English, "es" for Spanish).
This table ensures regions are properly translated for multilingual applications.

These migrations create a comprehensive structure to store and manage country and region data, ensuring scalability and flexibility for applications with global reach.

> **Tip**: You can visualize the table relationships in the EER diagram above, which highlights how these tables are connected.
