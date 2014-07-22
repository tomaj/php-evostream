<?php

namespace Tomaj\Evostream\Command;

class SetTimer extends Command
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
