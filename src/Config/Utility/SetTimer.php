<?php

namespace Tomaj\Evostream\Config;

class SetTimer extends Config
{
    protected $value;

    public function name()
    {
        return 'setTimer';
    }

    public function valid()
    {
        return strlen($this->value) > 0;
    }
}
