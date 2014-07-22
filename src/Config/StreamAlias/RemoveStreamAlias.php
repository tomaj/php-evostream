<?php

namespace Tomaj\Evostream\Config;

class RemoveStreamAlias extends Config
{
    protected $aliasName;

    public function name()
    {
        return 'removeStreamAlias';
    }

    public function valid()
    {
        return strlen($this->aliasName) > 0;
    }
}
