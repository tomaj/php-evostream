<?php

namespace Tomaj\Evostream\Command;

class Record extends Command
{
    protected $localStreamName;

    protected $pathToFile;

    protected $type;

    protected $overwrite;

    protected $keepAlive;

    protected $chunkLength;

    protected $waitForIDR;

    protected $winQtCompat;

    public function name()
    {
        return 'record';
    }

    public function valid()
    {
        return strlen($this->localStreamName) > 0 && strlen($this->pathToFile) > 0;
    }
}
