<?php

namespace Tomaj\Evostream\Config;

class RemoveIngestPoint extends Config
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
