<?php

namespace Tomaj\Evostream\Config;

class RemoveConfig extends Config
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
