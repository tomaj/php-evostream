<?php

namespace Tomaj\Evostream\Command;

class ShutdownServer extends Command
{
    protected $key;

    public function name()
    {
        return 'shutdownServer';
    }

    public function valid()
    {
        return true;
    }
}
