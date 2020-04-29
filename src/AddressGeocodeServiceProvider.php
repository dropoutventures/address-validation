<?php

namespace Dropoutventures\LaravelAddressValidation;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;

class AddressGeocodeServiceProvider extends ServiceProvider {

	/**
	 * Register the application services.
	 *
	 * @return boolean
	 */
	public function boot()
	{
		Validator::extend('address_geocode', function ($attribute, $value) {
		    return !empty($value) && Http::get('https://maps.googleapis.com/maps/api/geocode/json', [
			'address' => str_replace(' ', '+', preg_replace("/[^ \w]+/", "", $value)),
			'key' => env('GOOGLE_MAPS_API_KEY')
		    ])->json()['status'] === 'OK' ? TRUE : FALSE;
		});
	}

	public function register() {}
}
