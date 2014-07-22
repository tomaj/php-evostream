<?php

namespace Tomaj\Evostream\Config;

class SetConnectionsCountLimit extends Config
{
    protected $count;

    public function name()
    {
        return 'setConnectionsCountLimit';
    }

    public function valid()
    {
        return strlen($this->count) > 0;
    }
}
