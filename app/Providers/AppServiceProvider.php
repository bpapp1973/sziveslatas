<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerValidationRules($this->app['validator']);
   }

    protected function registerValidationRules(\Illuminate\Contracts\Validation\Factory $validator)
    {
        $validator->extend('taxid', '\App\Validators\TaxIdValidator@validateTaxId');
        $validator->extend('hash', '\App\Validators\HashValidator@validateHash');
    }

   /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
