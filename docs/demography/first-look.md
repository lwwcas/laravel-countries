# Your First Look

The `CountryExtras::class` is designed to extend the information about a country by including extra details like national sports, popular technologies, and much more.

Whether you're building applications with detailed country data or just want to store some fun facts, the `CountryExtras::class` helps you organize that information in a clean and maintainable way.

**Manage Additional Country Data:** The `CountryExtras` model adds fields for unique country attributes such as national sports, internet data, cybersecurity agencies, and international organizations.

## Overview

The `CountryExtras::class` includes several fillable attributes that let you extend your country data with unique details. Below is a quick description of each field:

| Attribute                 | Description                                                                 |
|---------------------------|-----------------------------------------------------------------------------|
| **National Sport**         | The country's most popular or officially recognized sport.                   |
| **Cybersecurity Agency**   | The main agency or organization responsible for national cybersecurity efforts. |
| **Popular Technologies**   | A list of technologies commonly used or emerging in the country.             |
| **Internet**               | Key statistics or information about internet usage, connectivity, or infrastructure in the country. |
| **Religions**              | Major religions practiced within the country, typically as an array of values. |
| **International Organizations** | A collection of international organizations that the country is part of, such as the UN or NATO. |

## Use Cases

The `CountryExtras::class` model is flexible and can be used in various scenarios to enhance your application's functionality. Here are some common use cases where this model shines:

1. **Displaying Extra Country Details on a Profile Page**
   Enrich a country’s profile by displaying its national sport, popular technologies, and other unique information alongside standard country data.

2. **Building a Cybersecurity Dashboard**
   Create a dashboard that shows the national cybersecurity agency of various countries, allowing users to explore and compare cybersecurity efforts around the globe.

3. **Filtering Countries by Internet Connectivity**
   Use the `internet` field to filter and display countries based on their internet usage or infrastructure, perfect for applications focusing on global technology trends.

4. **Showcasing International Organization Memberships**
   Highlight countries that are part of specific international organizations like the UN, NATO, or others, making it easy for users to explore global affiliations.

## Examples

Here are some example values for the different fields in the `CountryExtras::class` model:

| Field                    | Example Value                                                                                             |
|--------------------------|-----------------------------------------------------------------------------------------------------------|
| **National Sport**        | Football (Soccer)                                                                                         |
| **Cybersecurity Agency**  | Data Protection Department of Barbados                                                                    |
| **Popular Technologies**  | `["PHP", "JavaScript", "WordPress"]`                                                                      |
| **Internet**              | `{"speed": {"average_fixed": "70 Mbps", "average_mobile": "35 Mbps"}, "penetration": "82%"}`              |
| **Religions**             | `["Islam", "Christianity"]`                                                                               |
| **International Organizations** | `["United Nations", "European Union", "NATO", "OECD", "Schengen Area", "Eurozone", "Benelux"]`      |


> **NOTE**:
> The `internet` field uses a JSON structure to store detailed information about a country's internet connectivity. Here's a breakdown of the example JSON:
>
> - **speed**: This is an object that contains:
>   - **average_fixed**: The average speed of fixed (wired) internet connections in the country (in this case, `70 Mbps`).
>   - **average_mobile**: The average speed of mobile internet connections (in this case, `35 Mbps`).
> - **penetration**: This represents the percentage of the population with internet access (here, `82%`).
>
> This structure allows you to store both fixed and mobile internet speeds along with the overall penetration rate in a single, organized format.
