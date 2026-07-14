# Supported Databases

The **Laravel Countries** package has been tested and works perfectly with the following databases:

> **Note**: There is a very high chance that this package will work perfectly with other relational databases as well. However, since they have not been tested, we cannot guarantee full compatibility.

## **MySQL**

<img src="/assets/my-sql-logo.png" alt="MySQL Logo" style="max-height: 200px;">

**MySQL** is one of the most popular relational databases, widely used in web applications.

- **Pros**:
  - High performance for read-heavy operations.
  - Strong support from the open-source community.
  - Supports complex queries and large datasets.

- **Cons**:
  - Can become slower with very large write operations.
  - Some advanced features (like full-text search) are less powerful compared to PostgreSQL.

## **SQLite**

<img src="/assets/sql-lite-logo.png" alt="SqLite Logo" style="max-height: 100px;">

**SQLite** is a lightweight, serverless database that stores data in a single file. It’s often used in testing or lightweight applications.

- **Pros**:
  - No setup required; the entire database is stored in a single file.
  - Fast for small to medium-sized applications or for development environments.

- **Cons**:
  - Not ideal for large-scale applications or high-concurrency environments.
  - Limited support for some advanced database features like complex JOINs.

## **PostgreSQL**

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

## Custom Database Connection

By default, **Laravel Countries** stores its tables on your application's default database connection. If you want to keep the package tables on a separate connection (for example, a dedicated `countries` database), configure it in your `.env` file:

```env
DB_CONNECTION_COUNTRIES=countries
```

Make sure the connection is also defined in `config/database.php`:

```php
'connections' => [
    // ...

    'countries' => [
        'driver' => 'mysql',
        'host' => env('DB_HOST_COUNTRIES', env('DB_HOST', '127.0.0.1')),
        'port' => env('DB_PORT_COUNTRIES', env('DB_PORT', '3306')),
        'database' => env('DB_DATABASE_COUNTRIES', 'countries'),
        'username' => env('DB_USERNAME_COUNTRIES', env('DB_USERNAME', 'root')),
        'password' => env('DB_PASSWORD_COUNTRIES', env('DB_PASSWORD', '')),
        'charset' => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
        'strict' => true,
        'engine' => null,
    ],
],
```

You can also publish and override the package config:

```php
// config/w-countries.php
'driver' => env('DB_CONNECTION_COUNTRIES', config('database.default', 'mysql')),
```

When a custom connection is configured, the package applies it consistently across:

- Eloquent models
- Package migrations
- `w-countries:install` migrations and seeders
- `w-countries:seed` and language seeders
- Artisan commands that validate table availability

For production seeding options and manual `db:seed` commands, see the [Seeders guide](/setup/seeders).

> **Note**: If your application tables reference `lc_countries` with foreign keys, both connections must be able to resolve those relationships. Cross-database foreign keys are not supported by every database engine, so plan your schema accordingly.
