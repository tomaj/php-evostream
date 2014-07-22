<?php

namespace Tomaj\Evostream;

if ($argc < 3) {
    echo '
Send command to evostream servers

Usage: run.php <server_or_servers_comma_separated> <commandName> <params>
';
    die('need more configuration...');
}

require_once dirname(__FILE__) . '/../vendor/autoload.php';

class EvostreamCli
{
    private $command;

    private $arguments;

    private $servers;

    public function __construct($servers, $command, $arguments)
    {
        $this->servers = explode(',', $servers);
        $this->command = $command;
        $this->arguments = $arguments;
    }

    public function run()
    {
        $config = $this->createConfig();
        $evostream = new \Tomaj\Evostream\Evostream(new \Tomaj\Evostream\Protocol\HttpProtocol());
        $result = $evostream->addServers($this->servers)
            ->runCommand($config);

        echo "Result:\n";
        print_r($result);
    }

    private function createConfig()
    {
        $config = null;
        $command = $this->command;
        $command[0] = strtoupper($command[0]);

        $className = 'Tomaj\Evostream\Command\\' . $command;
        if (!class_exists($className)) {
            throw new \Exception("Invalid config {$this->command}");
        }

        $config = new $className();
        $config = $this->setupConfig($config);
        return $config;
    }

    private function setupConfig($config)
    {
        foreach ($this->arguments as $argument) {
            list($key, $value) = explode('=', $argument);
            $key[0] = strtoupper($key[0]);
            $setterName = 'set' . $key;
            $config->$setterName($value);
        }
        return $config;
    }
}

$command = new EvostreamCli($argv[1], $argv[2], array_slice($argv, 3));
$command->run();
