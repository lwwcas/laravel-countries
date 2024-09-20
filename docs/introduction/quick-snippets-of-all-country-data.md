# Quick snippets of all country data

## Country Data Explanation

Below is an explanation of all the country data fields provided by the **Laravel Countries** package:

### 1. **Name**

- **Brazil**: The common name of the country.
- This is the informal or short name used to reference the country.

### 2. **Official Name**

- **Federative Republic of Brazil**: The full official name of the country.
- This is the formal name used in official contexts, treaties, and legal documents.

### 3. **ISO Alpha-2**

- **BR**: The two-letter ISO 3166-1 code for the country.
- This code is commonly used for international shipping, data exchange, and as part of internet domains.

### 4. **ISO Alpha-3**

- **BRA**: The three-letter ISO 3166-1 code for the country.
- Used in many international standards to represent the country.

### 5. **ISO Numeric**

- **76**: The numeric ISO 3166-1 code for the country.
- This number is often used in data formats where numeric data is required, such as customs and trade databases.

### 6. **International Phone Code**

- **55**: The country’s international dialing code.
- This is the phone code used to make international calls to the country.

### 7. **Languages**

- **['pt']**: The official language or languages spoken in the country, represented as an array of ISO 639-1 language codes.
- Example: `pt` stands for Portuguese, the official language of Brazil.

### 8. **TLD (Top-Level Domain)**

- **['.br']**: The country’s internet domain suffix (TLD).
- This is used in web addresses specific to the country (e.g., websites ending in `.br` for Brazil).

### 9. **WMO Code**

- **BZ**: The country’s code according to the **World Meteorological Organization** (WMO).
- Used primarily in weather forecasting and climate monitoring systems.

### 10. **Geoname ID**

- **3469034**: The unique identifier from the **Geonames** database for geographical locations.
- This ID is useful for obtaining detailed geographical and administrative information about the country.

### 11. **Emoji**

- **🇧🇷**: The emoji flag representing the country.
- **U+1F1E7 U+1F1F7**: The Unicode representation of the emoji flag.
- Emojis are often used in user interfaces, social media, and web content to represent the country visually.

### 12. **Colors**

- **Hex**:
  - `#008000` (Green)
  - `#ffff00` (Yellow)
- **RGB**:
  - `0,128,0` (Green)
  - `255,255,0` (Yellow)
- These colors represent the primary colors in the country’s national flag and are often used in design, marketing, and branding related to the country.

### 13. **Coordinates**

- **Latitude**:
  - **Classic**: `10 00 S` (Standard degree format)
  - **Decimal**: `-10.81045150756836` (Decimal format)
- **Longitude**:
  - **Classic**: `55 00 W` (Standard degree format)
  - **Decimal**: `-52.97311782836914` (Decimal format)
- These values represent the central geographic coordinates of the country.

### 14. **Coordinate Limits**

- **Latitude**:
  - **Max**: `5.266667`
  - **Min**: `-33.733333`
- **Longitude**:
  - **Max**: `-28.85`
  - **Min**: `-73.75`
- These are the geographic boundaries that define the country's maximum and minimum latitude and longitude, representing the northernmost, southernmost, easternmost, and westernmost points of the country.


## Response data

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

## Fillable data

<img src="/assets/contry_model.svg" alt="Country Model">

## GeoJSON Structure

**GeoJSON** (Geographic JSON) is a format for encoding geographic data structures using JSON. It is widely used in mapping applications and geospatial analysis to represent various geographical features like points, lines, and polygons.

<img src="/assets/brazil-map.png" alt="Brazil Map">

## Use Cases of GeoJSON

GeoJSON is commonly used in various applications, such as:

### 1. **Mapping Applications**

- Used in interactive maps to display geographic data like country borders, rivers, roads, and regions.
- Example: Displaying country borders with **MultiPolygon**.

### 2. **Geospatial Analysis**

- Used to perform geospatial analysis, such as measuring distances, areas, or determining if a point lies within a certain region.
- Example: Determining whether a GPS coordinate falls within a polygon representing a country.

### 3. **Data Visualization**

- Used in data visualization tools to overlay geographical data on maps for insights, such as population density, climate data, and election results.
- Example: Visualizing a country’s boundary overlaid with population density.

### 4. **API Integration**

- Many APIs (such as geolocation services or environmental data providers) use GeoJSON to return geographic data in a structured format.
- Example: Using a GeoJSON response from an API to plot data points on a map.

## 🇧🇷 Brazil GeoJSON Complete

This GeoJSON object represents the full geographical boundaries of Brazil, utilizing the **FeatureCollection** structure and a **MultiPolygon** geometry type to handle the complexity of the country's borders, including islands and coastal regions. Below, we break down the key components relevant to developers working with geospatial data:

### 🔑 Key Components

1. **FeatureCollection**:
   - The root object is a **FeatureCollection**, which is a standard GeoJSON structure that contains multiple **Feature** objects. In this case, it encapsulates Brazil’s geographic representation.

2. **Feature**:
   - Each **Feature** represents a single geographic entity. Here, Brazil is represented as a **Feature**, with metadata included in the **properties** section. This modular design allows developers to easily manage multiple geographic objects within a single **FeatureCollection**.

3. **Properties**:
   - The **properties** object holds non-spatial data about the feature. In this example, the ISO Alpha-2 country code `"br"` is included as a property under `"cca2"`. These properties can be extended to include additional metadata, such as population data or administrative classifications, depending on your use case.

4. **Geometry**:
   - The **geometry** field defines the spatial shape of the feature. For Brazil, the geometry type is **"MultiPolygon"**, which allows the representation of the country's complex boundaries, including multiple distinct areas like islands or disjointed regions. This makes it ideal for use in applications that require detailed boundary mapping or geospatial analysis.

### 🌍 Brazil GeoJSON Example

```json
{
  "type": "FeatureCollection",
  "features": [
    {
      "type": "Feature",
      "properties": { "cca2": "br" },
      "geometry": {
        "type": "MultiPolygon",
        "coordinates": [
          [
            [
              [-48.55056, -27.82139],
              [-48.55667, -27.82278],
              [-48.563057, -27.82139],
              [-48.565285, -27.816669],
              [-48.566673, -27.81111],
              [-48.566673, -27.79889],
              [-48.56583, -27.79278],
              [-48.55056, -27.69611],
              [-48.53167, -27.646946],
              [-48.502785, -27.56167],
              [-48.50111, -27.556114],
              [-48.50111, -27.549168],
              [-48.503334, -27.544445],
              [-48.52167, -27.51833],
              [-48.527779, -27.491669],
              [-48.52361, -27.46639],
              [-48.51833, -27.43556],
              [-48.51723, -27.430836],
              [-48.43084, -27.39],
              [-48.42473, -27.388889],
              [-48.418335, -27.388889],
              [-48.414169, -27.39167],
              [-48.410835, -27.395557],
              [-48.37195, -27.44361],
              [-48.371117, -27.44972],
              [-48.40639, -27.59278],
              [-48.412506, -27.60111],
              [-48.44833, -27.63084],
              [-48.45889, -27.641945],
              [-48.49667, -27.71139],
              [-48.499725, -27.722504],
              [-48.500557, -27.728615],
              [-48.499725, -27.73473],
              [-48.498337, -27.74028],
              [-48.492226, -27.74861],
              [-48.485, -27.75611],
              [-48.479729, -27.765],
              [-48.479729, -27.77167],
              [-48.48222, -27.776669],
              [-48.48611, -27.78],
              [-48.54056, -27.816669],
              [-48.55056, -27.82139]
            ]
          ],
          [
            [
              [-48.58112, -26.39167],
              [-48.58584, -26.425556],
              [-48.62611, -26.39333],
              [-48.70556, -26.31444],
              [-48.707779, -26.309723],
              [-48.70473, -26.305557],
              [-48.55, -26.16972],
              [-48.54472, -26.167778],
              [-48.537781, -26.16722],
              [-48.52639, -26.17056],
              [-48.51723, -26.17611],
              [-48.51445, -26.18028],
              [-48.485, -26.22889],
              [-48.485, -26.234169],
              [-48.49028, -26.243057],
              [-48.517784, -26.280003],
              [-48.52723, -26.29222],
              [-48.531113, -26.29556],
              [-48.54028, -26.307781],
              [-48.54501, -26.317223],
              [-48.5789, -26.38667],
              [-48.58112, -26.39167]
            ]
          ],
          ...
        ]
      }
    }
  ]
}
```
