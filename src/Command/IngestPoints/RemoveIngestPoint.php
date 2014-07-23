<?php

namespace Tomaj\Evostream\Command;

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
