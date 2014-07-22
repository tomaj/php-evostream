<?php

namespace Tomaj\Evostream\Config;

class CreateMSSStream extends Config
{
    protected $localStreamNames;

    protected $targetFolder;

    protected $bandwidths;

    protected $groupName;

    protected $playlistType;

    protected $playlistLength;

    protected $manifestName;

    protected $chunkLength;

    protected $chunkOnIDR;

    protected $keepAlive;

    protected $overwriteDestination;

    protected $staleRetentionCount;

    protected $cleanupDestination;

    public function name()
    {
        return 'createMSSStream';
    }

    public function valid()
    {
        return strlen($this->localStreamNames) > 0 && strlen($this->targetFolder) > 0;
    }
}
