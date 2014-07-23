<?php

namespace Tomaj\Evostream\Command;

class ListConfig extends Command
{
    public function name()
    {
        return 'listConfig';
    }

    public function valid()
    {
        return true;
    }
}
