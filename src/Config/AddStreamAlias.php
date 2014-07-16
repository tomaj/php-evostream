<?php

namespace Tomaj\Evostream\Config;

class AddStreamAlias extends Config
{
    protected $localStreamName;

    protected $aliasName;

    public function name()
    {
        return 'addStreamAlias';
    }

    public function valid()
    {
        return strlen($this->localStreamName) > 0 && strlen($this->aliasName) > 0;
    }
}
