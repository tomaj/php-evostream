<?php

namespace Tomaj\Evostream\Command;

class RemoveConfig extends Command
{
    protected $id;

    public function name()
    {
        return 'removeConfig';
    }

    public function valid()
    {
        return isset($this->id) and $this->id > 0;
    }
}
