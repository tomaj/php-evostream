<?php

namespace Tomaj\Evostream\Command;

/**
 * @method setId($id)
 */
class GetStreamInfo extends Command
{
    protected $id;

    public function name()
    {
        return 'getStreamInfo';
    }

    public function valid()
    {
        return $this->id != null and $this->id > 0;
    }
}
