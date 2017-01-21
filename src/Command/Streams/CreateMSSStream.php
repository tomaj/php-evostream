<?php

namespace Tomaj\Evostream\Command;

/**
 * @method setLocalStreamNames($localStreamNames)
 * @method setTargetFolder($targetFolder)
 * @method setBandwidths($bandwidths)
 * @method setGroupName($groupName)
 * @method setPlaylistType($playlistType)
 * @method setPlaylistLength($playlistLength)
 * @method setManifestName($manifestName)
 * @method setChunkLength($chunkLength)
 * @method setChunkOnIDR($chunkOnIDR)
 * @method setKeepAlive($chunkLength)
 * @method setOverwriteDestination($overwriteDestination)
 * @method setStaleRetentionCount($staleRetentionCount)
 * @method setCleanupDestination($cleanupDestination)
 */
class CreateMSSStream extends Command
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
