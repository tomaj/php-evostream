<?php

namespace Tomaj\Evostream\Config;

class CreateHDSStream extends Config
{
    protected $localStreamNames;

    protected $targetFolder;

    protected $bandwidths;

    protected $chunkBaseName;

    protected $chunkLength;

    protected $chunkOnIDR;

    protected $groupName;

    protected $keepAlive;

    protected $manifestName;

    protected $overwriteDestination;

    protected $playlistType;

    protected $playlistLength;

    protected $staleRetentionCount;

    protected $createMasterPlaylist;

    protected $cleanupDestination;

    public function name()
    {
        return 'createHDSStream';
    }

    public function valid()
    {
        return strlen($this->localStreamNames) > 0 && strlen($this->targetFolder) > 0;
    }
}
