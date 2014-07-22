<?php

namespace Tomaj\Evostream\Config;

class ShutdownService extends Config
{
    protected $id;

    public function name()
    {
        return 'shutdownService';
    }

    public function valid()
    {
        return strlen($this->id) > 0;
    }
}
