<?php

namespace Tomaj\Evostream\Command;

class ListStreamAliases extends Command
{
    public function name()
    {
        return 'listStreamAliases';
    }

    public function valid()
    {
        return true;
    }
}
