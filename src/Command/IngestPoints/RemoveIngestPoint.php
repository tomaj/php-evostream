<?php

namespace Tomaj\Evostream\Command;

/**
 * @method setPrivateStreamName($privateStreamName)
 */
class RemoveIngestPoint extends Command
{
    protected $privateStreamName;

    public function name()
    {
        return 'removeIngestPoint';
    }

    public function valid()
    {
        return strlen($this->privateStreamName);
    }
}
