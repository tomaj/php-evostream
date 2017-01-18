<?php

namespace Tomaj\Evostream\Command;

/**
 * @method setPrivateStreamName($privateStreamName)
 * @method setPublicStreamName($publicStreamName)
 */
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
