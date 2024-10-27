# What is Laravel Countries?

<img src="/assets/hero-map.webp" alt="Hero Map" style="padding-top:15px;">

Laravel Countries is a package that provides everything you need to kickstart a new project with comprehensive country information, including translations. Optimized for Laravel, it ensures efficient access and management of country data.

The package stores all data directly in your database, allowing you to easily link it to any other table in a simple and familiar way using Laravel’s Eloquent ORM.

<div class="tip custom-block" style="padding-top: 8px">

Just want to try it out? Skip to the [Quickstart](/introduction/getting-started#🚀-getting-started).

</div>

<img src="/assets/logo.png" alt="My Logo" style="max-height: 35px;">

<p>
<img decoding="async" loading="lazy" src="https://img.shields.io/github/v/release/lwwcas/laravel-countries?style=flat-square&color=%23ff6f30" alt="release" style=" float: left; padding-right:15px;">

<img decoding="async" loading="lazy" src="https://img.shields.io/github/repo-size/lwwcas/laravel-countries?label=size&amp;style=flat-square&color=%23ff6f30" alt="size" style=" float: left; padding-right:15px;">


<img alt="Packagist Downloads" src="https://img.shields.io/packagist/dt/lwwcas/laravel-countries?style=flat-square&color=%23ff6f30" style=" float: left; padding-right:15px;">

<img alt="Packagist Stars" src="https://img.shields.io/packagist/stars/lwwcas/laravel-countries?style=flat-square&color=%23ff6f30" style=" float: left; padding-right:15px;">

<img alt="Packagist License" src="https://img.shields.io/packagist/l/lwwcas/laravel-countries?style=flat-square&color=%23ff6f30" style=" float: left; padding-right:15px;">

</p>

## Use Cases

 **🌍 Geolocation and Custom Maps**

Easily integrate **latitude and longitude** data with mapping services, like Google Maps, to visualize countries. With the precise **SVG outlines** of each country, you can create interactive, detailed maps where each country is perfectly highlighted and positioned. Ideal for geolocation services, travel apps, or geographic data visualization.

 **🌐 Flexible Data Management**

While the package doesn’t update automatically, developers can easily keep their country data up to date with a simple **query update**. This is perfect for applications that need to manage custom datasets or require occasional updates without full automation.

 **🔍 Advanced Country Search Filters**

The package comes equipped with several **pre-built queries**, such as `whereUuid`, `whereName`, and `whereIso`, enabling developers to filter countries by name, ISO code (Alpha-2, Alpha-3, numeric), phone code, and more. This is ideal for building search functionalities in large-scale applications like CRMs, directories, or global marketplaces.

 **📞 Phone Number and ISO Validation**

Validate phone numbers and country codes directly using the package's integrated data. The `wherePhoneCode` query allows easy validation and management of international phone numbers, making this a great fit for global platforms dealing with client or customer information.

 **🏴 Customizable Flag and Emoji Support**

Easily display national flags using **SVGs** or flag **emojis** with the built-in functionality. This feature is perfect for applications that require country-specific branding or need to enhance the UI with flag icons in forms, profiles, or country selectors.

 **🚛 Shipping and Regional Searches**

For applications like e-commerce platforms, the package’s **geographical queries** allow for advanced regional searches and filters. Use the `geographical` scope to quickly retrieve countries based on regions, continents, or proximity, optimizing delivery options, taxes, or regional preferences in your app.


 **🏴 Customizable Flags and Colors**

Create visually rich applications using the emoji flags and flag color data (HEX, RGB). This is useful for building country profiles, analytics dashboards, or travel-related applications that need a custom design touch.


## Developer Experience

### **🔗 Seamless Integration with Laravel**

Built specifically for Laravel, this package integrates effortlessly with **Eloquent** and **Laravel's Query Builder**, allowing developers to work with country data in a way that feels natural within the Laravel ecosystem.

### **⚡ Optimized for Performance**

All data is stored in your local database, ensuring **fast queries** and **minimal overhead** in your application. No external API calls are required to access country data, improving performance and reliability.

### **📚 Extensive Documentation**

We provide clear, concise documentation with **code snippets** and **examples** to help you get started quickly. Whether you need a simple query or a more complex geographical search, the documentation covers everything with step-by-step instructions.

### **🔎 Customizable Queries**

With a wide range of **pre-built scopes** like `scopeWhereUuid`, `scopeWhereName`, and `scopeWhereIso`, filtering and querying country data is extremely flexible. You can easily tailor the queries to meet the needs of your specific application.

### **🛠️ Developer-Friendly Features**

- **Easy Installation**: Get up and running in minutes with a straightforward installation process.
- **Configurable**: Customize the package to suit your application's needs without extensive configuration.
- **Localization Support**: Country names and other attributes come with **built-in translations**, making the package ready for global applications.
- **Active Community Support**: With a growing community of developers, you're never alone when using the package. Contributions and suggestions are always welcome!



## Performance

### **💾 Local Data Storage**

All country data is stored directly in your **local database**, eliminating the need for slow, unreliable external API requests. This ensures your queries are as fast as possible, providing near-instant access to country information.

### **⚙️ Optimized Queries**

The package takes full advantage of **Eloquent’s efficient query builder**, ensuring that each query runs as quickly as possible. Common operations like searching by ISO code or fetching geographical data are **indexed and optimized** to reduce latency.

### **🌐 No External Dependencies**

Unlike many packages that rely on third-party APIs for real-time data, Laravel Countries keeps everything in-house. This reduces the number of HTTP requests your app needs to make, saving on **network latency** and **API call costs**.

### **⚡ Caching Support**

The package can be easily integrated with **Laravel’s caching system**, allowing you to cache frequently accessed country data for even faster retrieval. This is especially useful in applications that handle large amounts of requests or serve data across multiple regions.

### **📥 Lazy Loading and Eager Loading**

Using **Eloquent’s lazy loading and eager loading** features, you can control exactly when and how much data is loaded into memory. This minimizes overhead, ensuring that your app only loads what it needs, when it needs it, keeping your memory footprint low.

### **📈 Scalable for High Traffic Applications**

Laravel Countries is designed to scale with your application. Whether you’re handling a few hundred requests or millions, the efficient structure of the package ensures it can handle **high traffic volumes** without sacrificing speed or reliability.


## What About Laravel?

**Laravel Countries** is designed with Laravel in mind, leveraging the framework’s powerful features to deliver a seamless experience for developers. Here are some key aspects of how this package enhances your Laravel applications:

### **Eloquent Integration**

The package utilizes Laravel's **Eloquent ORM**, allowing developers to interact with country data using familiar methods and patterns. You can perform complex queries, relationships, and data manipulation with ease.

### **Service Providers and Facades**

Built-in **service providers** and **facades** make it easy to integrate the package into your Laravel application. This ensures that all functionalities are readily available without additional setup.

### **Migrations and Seeders**

The package comes with migration files, allowing you to create the necessary tables in your database with minimal effort. You can also use seeders to populate your tables with sample data, helping you get started quickly.

### **Configuration Options**

Easily customize the package’s behavior through configuration files, enabling you to adapt it to the specific needs of your application.

### **Learn More About Laravel**

If you're looking to deepen your knowledge of Laravel and its features, check out these resources:

- [Laravel Official Documentation](https://laravel.com/docs) - The best place to start for all things Laravel.
- [Laracasts](https://laracasts.com/) - A comprehensive learning platform with video tutorials covering Laravel and PHP development.
- [Laravel News](https://laravel-news.com/) - Stay updated with the latest news, tutorials, and events in the Laravel community.

By leveraging Laravel's rich ecosystem, **Laravel Countries** ensures that you can build powerful, data-driven applications with minimal friction.
