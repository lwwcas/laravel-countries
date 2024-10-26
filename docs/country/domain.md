# Domain

Below, you'll find a list of methods available, which is used in the `Country` model to help you query countries based on their domain information.

These methods allow you to filter countries by their top-level domains (TLDs) and alternative TLDs.

## Where Domain

Find countries that have a specific top-level domain (TLD).

```php
->whereDomain(string $domain)
```

```php
Country::whereDomain('.us')->get();
```

## Where Domains

Find countries that have any of the specified top-level domains.

```php
->whereDomains(array $domains)
```

```php
Country::whereDomains(['.uk', '.fr', '.de'])->get();
```

## Where Domain Alternative

Find countries that have a specific alternative top-level domain (alternative TLD).

```php
->whereDomainAlternative(string $domains)
```

```php
Country::whereDomainAlternative('.us')->get();
```

## Where Domains Alternative

Find countries that have any of the specified alternative top-level domains (alternative TLDs).

```php
->whereDomainsAlternative(array $domains)
```

```php
Country::whereDomainsAlternative(['.uk', '.fr', '.de'])->get();
```
