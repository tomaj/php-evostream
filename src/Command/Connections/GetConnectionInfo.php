<?php

namespace Tomaj\Evostream\Command;

/**
 * @method setId($id)
 */
class GetConnectionInfo extends Command
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
