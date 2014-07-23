<?php

namespace Tomaj\Evostream\Command;

class SetConnectionsCountLimit extends Command
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
