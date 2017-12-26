<?php
namespace OnurKose\SNMPWrapper;

use Exception;
use Nelisys\Snmp;

class SNMPWrapper
{
    protected $instance;

    public function __construct()
    {
        try {
            $this->instance = new Snmp('127.0.0.1', 'public');
        } catch (Exception $e) {
            throw new Exception('Error initializing Nelisy/Snmp', 1);
        }
    }

    public function setHost($host, $comunity)
    {
        try {
            $this->instance = new Snmp($host, $comunity);
        } catch (Exception $e) {
            throw new Exception('Error initializing Nelisy/Snmp', 1);
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
