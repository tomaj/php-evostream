<?php

namespace Tomaj\Evostream\Config;

class InsertPlaylistItem extends Config
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
