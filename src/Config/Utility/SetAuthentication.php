<?php

namespace Tomaj\Evostream\Config;

class SetAuthentication extends Config
{
    protected $enabled;

    public function name()
    {
        return 'setAuthentication';
    }

    public function valid()
    {
        return strlen($this->enabled) > 0;
    }
}
