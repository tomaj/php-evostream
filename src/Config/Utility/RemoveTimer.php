<?php

namespace Tomaj\Evostream\Config;

class RemoveTimer extends Config
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
