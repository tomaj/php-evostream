<?php

namespace Tomaj\Evostream\Command;

/**
 * @method setKey($key)
 */
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
