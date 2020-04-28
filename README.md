# Address Validation in Laravel

This package adds physical address verification with Google Geocoding API.

1) composer require `dropoutventures/laravel-address-validation`
2) Add below line in your provider at (config\app.php) 
    'providers' => [
        ---------
        Sonlabs\AddressValid\AddressValidServiceProvider::class,
        ---------
    ],

        
```php
$rules = [
    'name' => 'required',
    'address' => 'required|address_geocode',
];
```
