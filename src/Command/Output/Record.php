<?php

namespace Tomaj\Evostream\Command;

/**
 * @method setLocalStreamName($localStreamName)
 * @method setPathToFile($pathToFile)
 * @method setType($type)
 * @method setOverwrite($overwrite)
 * @method setKeepAlive($keepAlive)
 * @method setChunkLength($chunkLength)
 * @method setWaitForIDR($waitForIDR)
 * @method setWinQtCompat($winQtCompat)
 */
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
