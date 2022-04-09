<?php
namespace Aldiskatel\License;
use illuminate\Support\ServiceProvider;

class NeuLicenseServiceProvider extends ServiceProvider{
    public function boot(){
        //
    }
    public function register(){
        //
        $this->app->singleton(NeuLicense::class, function(){
            return new NeuLicense();
        });
    }
}
