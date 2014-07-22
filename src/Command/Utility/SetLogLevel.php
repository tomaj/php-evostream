<?php

namespace Tomaj\Evostream\Command;

class SetLogLevel extends Command
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
