<?php

namespace Tomaj\Evostream\Config;

class ShutdownServer extends Config
{
    protected $key;

    public function name()
    {
        return 'shutdownServer';
    }

    public function valid()
    {
        return true;
    }
}
