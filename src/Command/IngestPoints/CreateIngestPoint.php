<?php

namespace Tomaj\Evostream\Command;

class CreateIngestPoint extends Command
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
