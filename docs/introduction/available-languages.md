# 🌍 Available Languages

## Languages

We currently support the following languages:

| Language      | Flag | Country      | Number of Countries |
|---------------|------|--------------|---------------------|
| Arabic        | 🇸🇦   | Saudi Arabia | 25                  |
| Dutch         | 🇳🇱   | Netherlands  | 3                   |
| English       | 🇬🇧   | United Kingdom| 67                  |
| German        | 🇩🇪   | Germany      | 6                   |
| Italian       | 🇮🇹   | Italy        | 4                   |
| Portuguese    | 🇧🇷   | Brazil       | 9                   |
| Russian       | 🇷🇺   | Russia       | 4                   |
| Spanish       | 🇪🇸   | Spain        | 21                  |


> **Note**: The "Number of Countries" refers to the estimated number of countries where the language is either official or widely spoken.

## ⚙️ Language Management Features

- **Flexible Installation and Uninstallation**: You can install or uninstall any of the supported languages at any time, or install all of them at once using a simple artisan command:

  ```bash
  php artisan w-countries:languages
  ```

This provides flexibility in managing your application's languages, without compromising its functionality.

<img src="/assets/terminal-language-command.png" alt="Artisan language command" >
<img src="/assets/terminal-language-command-1.png" alt="Artisan language command" style="padding-top:25px;">

## 🔧 Additional Language Options

### **Default Language (English)**

The **English** language is the default and will always be installed. It **cannot be removed**, as it ensures base functionality. However, you can add or remove other languages at any time.

### **Seamless Updates**

Languages can be installed or uninstalled without affecting the core logic of your application. This ensures that your app remains stable and functional as you manage translations.

### **Future Language Support**

As new languages become available, they can be installed in **under a minute**, making it easy to keep your application up-to-date and accessible to a global audience.

With these features, managing languages in **Laravel Countries** is straightforward and efficient, ensuring your application is ready for users in multiple languages.

## 🛠️ Required Dependencies

This package relies on **[Spatie's Laravel Translatable](https://github.com/spatie/laravel-translatable)** to handle translations efficiently. The **spatie/laravel-package-tools** version **^1.16.0** or higher is required for proper functionality and will be installed automatically when you install **Laravel Countries** as a required dependency.

### **About Spatie Laravel Translatable**

**Spatie Laravel Translatable** is a powerful package designed to simplify working with multilingual content in Laravel applications. It allows you to easily manage translations for any model attribute. Some key features include:

- **Easy Integration**: Works seamlessly with **Eloquent**, allowing you to store and retrieve translations just like regular attributes.
- **Flexible Translation Management**: Store translations for multiple languages in a clean and structured way, minimizing database complexity.
- **Developer-Friendly API**: Provides a simple API that makes managing translations intuitive and efficient.

By leveraging **Spatie Laravel Translatable**, the **Laravel Countries** package offers seamless multilingual support across various locales.

<div class="tip custom-block" style="padding-top: 8px">

Consider leaving a star on [Spatie's Laravel Translatable GitHub repository](https://github.com/spatie/laravel-translatable). It's an incredible package, and we highly recommend it!

</div>
