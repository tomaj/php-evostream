<?php

namespace Tomaj\Evostream;

use Tomaj\Evostream\Config\Config;
use Tomaj\Evostream\Config\PullStream;
use Tomaj\Evostream\Config\PushStream;
use Tomaj\Evostream\Config\ConfigException;
use Tomaj\Evostream\Protocol\ProtocolInterface;

class Evostream
{
    private $servers = array();

    /**
     * @var \Tomaj\Evostream\Protocol\ProtocolInterface;
     */
    private $protocol;

    public function __construct(ProtocolInterface $protocol)
    {
        $this->protocol = $protocol;
    }

    public function addServer($serverAddress)
    {
        if (!$this->hasServer($serverAddress)) {
            $this->servers[] = $serverAddress;
        }
        return $this;
    }

    public function removeServer($serverAddress)
    {
        if ($this->hasServer($serverAddress)) {
            unset($this->servers[$serverAddress]);
        }
        return $this;
    }

    public function addServers($serversArray)
    {
        $this->servers = array_merge($this->servers, $serversArray);
        return $this;
    }

    private function hasServer($serverAddress)
    {
        return isset($this->servers[$serverAddress]);
    }

    // evostream commands

    public function pullStream(PullStream $pullStream)
    {
        return $this->runCommand($pullStream);
    }

    public function pushStream(PushStream $pushStream)
    {
        return $this->runCommand($pushStream);
    }

    public function runCommand(Config $config)
    {
        if (!$config->valid()) {
            throw new ConfigException("Yout configuration for function '{$config->name()}' is invalid");
        }
        $result = new Result();
        foreach ($this->servers as $server) {
            $res = $this->protocol->call($server, $config->name(), $config->getEncodedParams());
            $result->addResult($server, $res['status'], $res);
        }
        return $result;
    }
}
