<?php

namespace Tomaj\Evostream\Command;

class RemoveStreamAlias extends Command
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
