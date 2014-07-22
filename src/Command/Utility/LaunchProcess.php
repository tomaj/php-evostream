<?php

namespace Tomaj\Evostream\Command;

class LaunchProcess extends Command
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
