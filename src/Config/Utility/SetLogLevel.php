<?php

namespace Tomaj\Evostream\Config;

class SetLogLevel extends Config
{
    protected $level;

    public function name()
    {
        return 'setLogLevel';
    }

    public function valid()
    {
        return strlen($this->level) > 0;
    }
}
