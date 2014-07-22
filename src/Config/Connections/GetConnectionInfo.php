<?php

namespace Tomaj\Evostream\Config;

class GetConnectionInfo extends Config
{
    protected $id;

    public function name()
    {
        return 'getConnectionInfo';
    }

    public function valid()
    {
        return strlen($this->id) > 0;
    }
}
