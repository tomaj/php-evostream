<?php

namespace Tomaj\Evostream\Command;

class CreateService extends Command
{
    protected $ip;

    protected $port;

    protected $protocol;

    protected $sslCert;

    protected $sslKey;

    public function name()
    {
        return 'createService';
    }

    public function valid()
    {
        return strlen($this->ip) > 0 && strlen($this->port) > 0 && strlen($this->protocol) > 0;
    }
}
