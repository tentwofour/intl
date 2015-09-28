# Intl Component

Just a few helpers, good for use when dealing with Canadian and USA provinces/states, forms, and persistence.

```php
$provinces = CountryHelper::getCanadianProvinces();
```
Returns:
 ```php
[
    'AB' => 'Alberta',
    'BC' => 'British Columbia',
    'MB' => 'Manitoba',
    'NB' => 'New Brunswick',
    'NL' => 'Newfoundland and Labrador',
    'NS' => 'Nova Scotia',
    'NU' => 'Nunavut',
    'NT' => 'Northwest Territories',
    'ON' => 'Ontario',
    'PE' => 'Prince Edward Island',
    'QC' => 'Quebec',
    'SK' => 'Saskatchewan',
    'YT' => 'Yukon'
];

```

```php
$provinces = CountryHelper::getCanadianProvinceAbbreviations();
```

Returns:

```php
[
    0 => 'AB',
    1 => 'BC',
    2 => 'MB',
    3 => 'NB',
    4 => 'NL',
    5 => 'NS',
    6 => 'NU',
    7 => 'NT',
    8 => 'ON',
    9 => 'PE',
    10 => 'QC',
    11 => 'SK',
    12 => 'YT'
];
```

The USA helper methods behave in the same manner.
