<?php

namespace Tomaj\Evostream\Config;

class GetConnectionsCount extends Config
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
