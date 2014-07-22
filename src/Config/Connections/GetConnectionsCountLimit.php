<?php

namespace Tomaj\Evostream\Config;

class GetConnectionsCountLimit extends Config
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
