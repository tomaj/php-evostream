<?php

namespace Tomaj\Evostream\Command;

class RemoveTimer extends Command
{
    protected $id;

    public function name()
    {
        return 'removeTimer';
    }

    public function valid()
    {
        return strlen($this->id);
    }
}
