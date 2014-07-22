<?php

namespace Tomaj\Evostream\Config;

class EnableService extends Config
{
    protected $id;

    protected $enable;

    public function name()
    {
        return 'enableService';
    }

    public function valid()
    {
        return strlen($this->id) > 0 && strlen($this->enable) > 0;
    }
}
