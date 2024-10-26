# Relationships

When managing complex datasets like countries, it’s common to encounter multiple types of data, each with unique attributes. To keep our data organized and make our database queries more efficient, we have divided the country-related information into separate tables. Each table focuses on specific details about the country, allowing us to retrieve only the necessary information when required.

This structure provides several benefits:

- **Efficiency**: By structuring data into separate tables, we reduce the load on each query. Instead of loading all information related to a country in every query, we can request only the data we need at a given moment.
- **Modularity**: Separate tables for `CountryRegion`, `CountryGeographical`, `CountryExtras`, and `CountryCoordinates` ensure that each data type is organized and easy to access without introducing complexity.
- **Flexibility**: This modular approach keeps data scalable. Adding or modifying information in one section doesn’t impact the others, making it easier to manage updates or customizations.

## Region

Connects each country to its region, using a foreign key.

Load the region when we need broader geographical context.

::: info
**[`Region Full version`](/region/first-look.html)**
:::

## Geographical

Retrieves geographical details specific to the country, such as latitude, longitude, and altitude.

Access only when geographical data is specifically needed, keeping other queries lightweight.

::: info
**[`Geographical Full version`](/geographical/first-look.html)**
:::

## Demography

[Extras]

Provides additional information about the country, stored separately to avoid cluttering the main table.

Useful for querying extra attributes without loading them in every country request.

::: info
**[`Demography Full version`](/demography/first-look.html)**
:::

## Coordinates

Retrieves precise coordinate data for a country.

Ideal for location-based features, enabling efficient queries when coordinates are necessary.

::: info
**[`Coordinates Full version`](/coordinates/first-look.html)**
:::

By adopting this approach, `Country::class` enables optimized data retrieval, improving both performance and scalability. This structure is particularly effective for large datasets, allowing for faster and more reliable queries tailored to the specific needs of each request.
