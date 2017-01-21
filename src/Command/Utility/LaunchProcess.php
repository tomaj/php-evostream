<?php

namespace Tomaj\Evostream\Command;

/**
 * @method setPlaylistName($playlistName)
 * @method setLocalStreamName($localStreamName)
 * @method setInsertPoint($insertPoint)
 * @method setSourceOffset($sourceOffset)
 * @method setDuration($duration)
 */
class LaunchProcess extends Command
{
    protected $fullBinaryPath;

    protected $keepAlive;

    protected $arguments;

    public function name()
    {
        return 'launchProcess';
    }

    public function valid()
    {
        return strlen($this->fullBinaryPath) > 0;
    }
}
