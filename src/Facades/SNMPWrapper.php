<?php
namespace OnurKose\SNMPWrapper\Facades;

use OnurKose\SNMPWrapper\SNMPWrapperServiceProvider;

use Illuminate\Support\Facades\Facade;

class SNMPWrapper extends Facade
{

    protected static function getFacadeAccessor()
    {
        return 'snmpwrapper';
    }
}