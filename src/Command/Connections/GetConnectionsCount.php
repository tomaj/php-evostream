<?php

namespace Tomaj\Evostream\Command;

class GetConnectionsCount extends Command
{
    public function name()
    {
        return 'getConnectionsCount';
    }

    public function valid()
    {
        return true;
    }
}
