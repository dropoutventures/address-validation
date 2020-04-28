# Address Validation in Laravel

This package adds physical address verification with Google Geocoding API.

1) composer require `dropoutventures/laravel-address-validation`
2) `.env` add `GOOGLE_MAPS_API_KEY=` [Get an API Key](https://developers.google.com/maps/documentation/geocoding/get-api-key)

Example:        
```php
$rules = [
    'name' => 'required',
    'address' => 'required|address_geocode',
];
```
