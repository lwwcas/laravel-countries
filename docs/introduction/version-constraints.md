# Version Constraints

## Semantic Versioning

A version consists of four parts: **MAJOR.LARAVEL.MINOR.PATCH**. For example, version **1.11.2.3** of a package could be interpreted as a package on major version 1, Laravel version 11, minor version 2, and patch level 3.

### Version Breakdown

- **Major**: Indicates breaking changes compared to the previous release. Consumers of the package will need to adjust their existing code when upgrading to a new major version.

- **Laravel**: Refers to the version of Laravel that the package is compatible with. This ensures the package aligns with the corresponding Laravel release cycle, allowing for seamless integration.

- **Minor**: Represents added functionality (e.g., new methods or features) that does not break existing functionality. Consumers of the package will not need to modify their code to continue using the package.

- **Patch Level**: Refers to bug fixes, performance improvements, or updated dependencies. This does not introduce new functionality, and consumers do not need to make changes to their code when upgrading.

> **Note**: For a more in-depth overview of Semantic Versioning, you can visit [semver.org](https://semver.org).

> **Note**: This section offers a brief overview of how Semantic Versioning is used and applied in Laravel Countries

## Requirements

The **Laravel Countries** package has the following system and package requirements to ensure proper functionality. Below is a breakdown of the required versions for both runtime and development environments.

### Runtime Requirements (Production)

- **PHP**: The package supports PHP versions **^8.0**, **^8.1**, and **^8.2**, ensuring compatibility with modern PHP versions.

- **Laravel Framework**: Compatible with Laravel versions **^9.0**, **^10.0**, and **^11.0**. This ensures that the package can be used with the most up-to-date releases of the Laravel framework.

- **Astrotomic Laravel Translatable**: Requires version **^11.8** of the **Astrotomic Laravel Translatable** package for multilingual support in the application.

- **Spatie Laravel Package Tools**: Requires version **^1.16.0** of **Spatie's Laravel Package Tools** to assist in the package setup and management.

### Development Requirements

The following dependencies are required for development and testing purposes:

- **Doctrine DBAL**: Version **^3.0** is required for handling more advanced database schema changes.

- **Laravel Legacy Factories**: Version **^1.0.4** is needed for maintaining compatibility with older Laravel factory structures.

- **Orchestra Testbench**: Version **^7.0** is used for testing the package in a Laravel-like environment without needing a full Laravel application.

- **PHPUnit**: Version **9.6.0** is required for running unit tests to ensure package reliability and stability.

Ensure that your environment meets these requirements to guarantee smooth installation and usage of the **Laravel Countries** package.

## Version Compatibility

The following table outlines the compatibility of the **Laravel Countries** package version **4.11.0.0** with different Laravel versions:

| Package Version | Laravel 9.x | Laravel 10.x | Laravel 11.x |
|-----------------|-------------|--------------|--------------|
| 4.11.x.x        | ✅ Compatible  | ✅ Compatible  | ✅ Compatible  |

This table shows that version **4.11.0.0** of the **Laravel Countries** package is fully compatible with Laravel versions **9.x**, **10.x**, and **11.x**,

## Releasing a New Version

When releasing a new version of your Laravel Countries package, it's important to understand how versioning works and how you can configure automatic updates for certain parts of the version number.

### Automatic Updates for Patch and Minor Versions

To ensure your package stays up-to-date automatically for minor changes (such as bug fixes or small feature improvements), you can allow Composer to update the **patch** and **minor** parts of the version automatically. For example:

- Version **4.11.x.x** means:
  - The **4** is the **major** version, which should only be changed when there are significant, breaking changes.
  - The **11** represents the **Laravel version**. You will need to change this number whenever you want to ensure compatibility with a new major release of Laravel (e.g., Laravel 12).
  - The **x.x** represents the **minor** and **patch** versions, which Composer can automatically update. This means that if you configure your package version as **4.11.\***, it will automatically update for minor changes and bug fixes within the same Laravel version.

### How to Configure Automatic Updates

To allow Composer to automatically update the minor and patch versions, you can specify your dependency like this:

```bash
composer require lwwcas/laravel-countries:^4.11
```

Use a version format like **^4.11** to tell Composer to install the **latest minor and patch versions** of **4.11**. This way, **4.11.0.x** and **4.11.x.x** will be automatically updated without requiring manual intervention.

### Updating the Laravel Version

Every time Laravel releases a new major version (e.g., Laravel 12), you will need to manually update the **Laravel version** in your dependency. For example:

- **4.12.x.x** should be used when you want to support Laravel 12.
- The **11** should be changed to **12** in the version, as in **4.12.x.x**, whenever you are ready to support the latest major version of Laravel.

This change ensures compatibility with the latest features and updates in the new Laravel release.

### Major Version Updates (4.x.x.x to 5.x.x.x)

Upgrading to a new **major version** (from **4.x** to **5.x**) is a significant change and should only be done after careful consideration. A major version change often includes breaking changes that could affect the stability of your application.

Here are a few important guidelines:

1. **Backup**: Always perform a full backup of your project before updating to a new major version.
2. **Testing**: Run extensive tests to ensure that the new structure of the package works seamlessly with your existing codebase.
3. **Review Breaking Changes**: Check the release notes or changelog to see if there are any breaking changes in the new major version.

We strongly recommend upgrading to a new major version only after you have validated that the new structure meets all your requirements and passes all necessary tests.

### Best Practices for Versioning

- **Patch and minor versions**: Let Composer handle automatic updates by using `^4.11` in your dependency version.
- **Laravel version updates**: Update the second number in your version (e.g., from **4.11** to **4.12**) to ensure compatibility with the latest Laravel release.
- **Major version updates**: Proceed with caution when updating the first number (e.g., from **4.x** to **5.x**) and make sure to thoroughly test the new version.

By following these steps, you can keep your Laravel Countries package up-to-date and compatible with the latest features while maintaining stability in your projects.

## Maintaining an Old Version

If you want to maintain an older version of the **Laravel Countries** package and prevent it from updating to a newer major or minor version, you can configure Composer to only allow specific types of updates.

### Locking the Version

To lock your project to a specific version (for example, **4.11.0**), preventing any updates, you can set the exact version in your `composer.json` file:

```json
"require": {
    "lwwcas/laravel-countries": "4.11.0"
}
```
This ensures that the package will **not** be updated to any newer minor or patch versions.

### Allowing Only Patch Updates

If you want to allow **patch** updates (the last part of the version, x.x), but not **minor** or **major** updates, you can configure Composer using a tilde (`~`).
For example:

```json
"require": {
    "lwwcas/laravel-countries": "~4.11.0.1"
}
```

Using a tilde version constraint like **~4.11.0** will allow Composer to update **patch** versions like **4.11.1**, **4.11.2**, etc., but it will **not** update to a new minor version like **4.12.x** or a major version like **5.x.x**.

### Best Practice for Old Version Maintenance

- Use an **exact version** (e.g., `4.11.0`) if you want to completely lock the version and avoid any updates.
- Use the **tilde version constraint** (`~4.11.0`) if you want to allow only **patch** updates but avoid minor or major version upgrades.
- Regularly review the changelog of new versions to decide when it is appropriate to manually upgrade to a newer version.

By following this approach, you can maintain stability in your project while allowing controlled updates to the package as needed.
