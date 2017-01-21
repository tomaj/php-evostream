<?php

namespace Tomaj\Evostream\Command;

/**
 * @method setLocalStreamNames($localStreamNames)
 * @method setTargetFolder($targetFolder)
 * @method setBandwidths($bandwidths)
 * @method setChunkBaseName($chunkBaseName)
 * @method setChunkOnIDR($chunkOnIDR)
 * @method setGroupName($groupName)
 * @method setKeepAlive($keepAlive)
 * @method setManifestName($manifestName)
 * @method setOverwriteDestination($overwriteDestination)
 * @method setPlaylistType($playlistType)
 * @method setPlaylistLength($playlistLength)
 * @method setStaleRetentionCount($staleRetentionCount)
 * @method setCreateMasterPlaylist($createMasterPlaylist)
 * @method setCleanupDestination($cleanupDestination)
 */
class CreateHDSStream extends Command
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
