<?php

namespace Tomaj\Evostream\Command;

/**
 * @method setIp($ip)
 * @method setPost($port)
 * @method setProtocol($protocol)
 * @method setSslCert($sslCert)
 * @method setSslKey($sslKey)
 */
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
