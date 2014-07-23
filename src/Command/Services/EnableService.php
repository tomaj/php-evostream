<?php

namespace Tomaj\Evostream\Command;

class EnableService extends Command
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
