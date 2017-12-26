<?php
namespace OnurKose\SNMPWrapper;

use Exception;
use Nelisys\Snmp;

class SNMPWrapper
{
    protected $instance;

    public function __construct($host, $community)
    {
        try {
            $this->instance = new Snmp($host, $community);
        } catch (Exception $e) {
            throw new Exception('Error Processing Request', 1);
        }
    }
    
    public function get($oids)
    {
        return $this->instance->get($oids);
    }
    
    public function walk($oid)
    {
        return $this->instance->walk($oid);
    }
}
