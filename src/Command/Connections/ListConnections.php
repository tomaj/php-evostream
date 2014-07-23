<?php

namespace Tomaj\Evostream\Command;

class ListConnections extends Command
{
    public function name()
    {
        return 'listConnections';
    }

    public function valid()
    {
        return true;
    }
}
