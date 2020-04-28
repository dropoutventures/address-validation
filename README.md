# Address Validation in Laravel

This package adds physical address verification with Google Geocoding API.

1) composer require `dropoutventures/laravel-address-validation`

Example:        
```php
$rules = [
    'name' => 'required',
    'address' => 'required|address_geocode',
];
```
