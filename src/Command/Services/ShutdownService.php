<?php

namespace Tomaj\Evostream\Command;

/**
 * @method setId($id)
 */
class ShutdownService extends Command
{
    protected $id;

    public function name()
    {
        return 'shutdownService';
    }

    public function valid()
    {
        return strlen($this->id) > 0;
    }
}
