<?php

namespace Tomaj\Evostream\Command;

class ShutdownStream extends Command
{
    protected $id;

    protected $localStreamName;

    protected $permanently;

    public function name()
    {
        return 'shutdownStream';
    }

    public function valid()
    {
        return true;
    }
}
