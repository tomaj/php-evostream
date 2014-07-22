<?php

namespace Tomaj\Evostream\Config;

class LaunchProcess extends Config
{
    protected $fullBinaryPath;

    protected $keepAlive;

    protected $arguments;

    public function name()
    {
        return 'launchProcess';
    }

    public function valid()
    {
        return strlen($this->fullBinaryPath) > 0;
    }
}
