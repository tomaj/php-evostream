<?php

namespace Tomaj\Evostream\Config;

class CreateIngestPoint extends Config
{
    protected $privateStreamName;

    protected $publicStreamName;

    public function name()
    {
        return 'createIngestPoint';
    }

    public function valid()
    {
        return strlen($this->privateStreamName) > 0 && strlen($this->publicStreamName);
    }
}
