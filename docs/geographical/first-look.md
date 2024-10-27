# Your First Look

The `CountryGeographical::class` model provides detailed geographical data related to countries, including region classifications, time zones, and various identifiers (e.g., ISO, ITU, ICAO). This data allows for precise categorization and representation of countries across different global and regional systems.

## GeoJSON Structure

**GeoJSON** (Geographic JSON) is a format for encoding geographic data structures using JSON. It is widely used in mapping applications and geospatial analysis to represent various geographical features like points, lines, and polygons.

<img src="/assets/brazil-map.png" alt="Brazil Map">

### GeoJSON

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


## GeoJSON Example

Brazil GeoJson Example

::: details Click me to view the example

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

:::
