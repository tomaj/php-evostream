<?php

namespace Tomaj\Evostream\Config;

class CreateHLSStream extends Config
{
    protected $localStreamNames;

    protected $targetFolder;

    protected $keepAlive;

    protected $overwriteDestination;

    protected $staleRetentionCount;

    protected $createMasterPlaylist;

    protected $cleanupDestination;

    protected $bandwidths;

    protected $groupName;

    protected $playlistType;

    protected $playlistLength;

    protected $playlistName;

    protected $chunkLength;

    protected $chunkBaseName;

    protected $chunkOnIDR;

    protected $drmType;

    protected $AESKeyCount;

    public function name()
    {
        return 'createHLSStream';
    }

    public function valid()
    {
        return strlen($this->localStreamNames) > 0 && strlen($this->targetFolder) > 0;
    }
}
