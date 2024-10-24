# Independence Day

Looking to explore countries based on their independence dates? The following methods make it easy to find countries that match specific independence criteria. Whether you're curious about countries that gained independence in a certain year, before or after a particular date, or even within a specific month, these methods have you covered!

## Where Independence After

Find countries that gained independence after a specific date.

```php
->whereIndependenceAfter()
```

```php [Example]
Country::whereIndependenceAfter('1950-01-01')->get();
```

## Where Independence Before

Find countries that gained independence before a specific date.

```php
->whereIndependenceBefore()
```

```php [Example]
Country::whereIndependenceBefore('1900-01-01')->get();
```

## Where Independence Between Dates

Find countries that gained independence before a specific date.

```php
->whereIndependenceBetweenDates()
```

```php [Example]
Country::whereIndependenceBetweenDates('1900-01-01', '2000-12-31')->get();
```

## Where Independence Day

Find countries with a specific independence date.

```php
->whereIndependenceDay()
```

```php [Example]
Country::whereIndependenceDay('1776-07-04')->get();
```

## Where Independence Month

Find countries that gained independence in a specific month.

```php
->whereIndependenceDay()
```

```php [Example]
Country::whereIndependenceMonth(7)->get(); // July
```

## Where Independence Year

Find countries that gained independence in a specific year.

```php
->whereIndependenceYear()
```

```php [Example]
Country::whereIndependenceYear(1960)->get();

```
