<?php

namespace Tomaj\Evostream\Command;

/**
 * @method setId($id)
 * @method setlocalStreamName($localStreamName)
 * @method setPermanently($permanently)
 */
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
