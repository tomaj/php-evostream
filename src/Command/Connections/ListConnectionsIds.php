<?php

namespace Tomaj\Evostream\Command;

class ListConnectionsIds extends Command
{
    public function name()
    {
        return 'listConnectionsIds';
    }

    public function valid()
    {
        return true;
    }
}
