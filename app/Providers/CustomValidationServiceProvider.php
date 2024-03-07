<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator; // Import Validator facade

class CustomValidationServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
         Validator::extend('user_type', function ($attribute, $value, $parameters, $validator) {
            return $value === 'Admin' || $value === 'User';
        });    }
}
