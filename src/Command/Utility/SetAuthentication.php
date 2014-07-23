<?php

namespace Tomaj\Evostream\Command;

class SetAuthentication extends Command
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
