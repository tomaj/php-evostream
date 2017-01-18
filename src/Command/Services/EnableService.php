<?php

namespace Tomaj\Evostream\Command;

/**
 * @method setId($id)
 * @method setEnable($enable)
 */
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
