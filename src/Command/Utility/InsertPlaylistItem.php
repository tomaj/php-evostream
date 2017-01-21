<?php

namespace Tomaj\Evostream\Command;

/**
 * @method setPlaylistName($playlistName)
 * @method setLocalStreamName($localStreamName)
 * @method setInsertPoint($insertPoint)
 * @method setSourceOffset($sourceOffset)
 * @method setDuration($duration)
 */
class InsertPlaylistItem extends Command
{
    protected $playlistName;

    protected $localStreamName;

    protected $insertPoint;

    protected $sourceOffset;

    protected $duration;

    public function name()
    {
        return 'insertPlaylistItem';
    }

    public function valid()
    {
        return strlen($this->playlistName) > 0 && strlen($this->localStreamName) > 0;
    }
}
