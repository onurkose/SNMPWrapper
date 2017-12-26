<?php

namespace OnurKose\SNMPWrapper;

use Illuminate\Support\ServiceProvider;

class SNMPWrapperServiceProvider extends ServiceProvider
{

    public function boot()
    {
    }

    public function register()
    {
        $this->app->bind('snmpwrapper', function () {
            return new SNMPWrapper();
        });
    }
}
