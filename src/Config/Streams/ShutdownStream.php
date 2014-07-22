<?php

namespace Tomaj\Evostream\Config;

class ShutdownStream extends Config
{
    protected $id;

    protected $localStreamName;

    protected $permanently;

    public function name()
    {
        return 'shutdownStream';
    }

    public function valid()
    {
        return true;
    }
}
