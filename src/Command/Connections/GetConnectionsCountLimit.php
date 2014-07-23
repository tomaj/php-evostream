<?php

namespace Tomaj\Evostream\Command;

class GetConnectionsCountLimit extends Command
{
    public function name()
    {
        return 'getConnectionsCountLimit';
    }

    public function valid()
    {
        return true;
    }
}
