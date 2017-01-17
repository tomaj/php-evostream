<?php

namespace Tomaj\Evostream\Command;

/**
 * @method setLocalstreamnames($localStreamNames)
 * @method setTargetFolder($targetFolder)
 * @method setKeepAlive($keepAlive)
 * @method setOverwriteDestination($overwriteDestination)
 * @method setStaleRetentionCount($staleRetentionCount)
 * @method setCreateMasterPlaylist($createMasterPlaylist)
 * @method setCleanupDestination($cleanupDestination)
 * @method setBandwidths($bandwidths)
 * @method setGroupName($groupName)
 * @method setPlaylistType($playlistType)
 * @method setPlaylistLength($playlistLength)
 * @method setPlaylistName($playlistName)
 * @method setChunkLength($chunkLength)
 * @method setChunkBaseName($chunkBaseName)
 * @method setChunkOnIDR($chunkOnIDR)
 * @method setDrmType($drmType)
 * @method setAESKeyCount($AESKeyCount)
 */
class CreateHLSStream extends Command
{
    protected $localstreamnames;

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
        return strlen($this->localstreamnames) > 0 && strlen($this->targetFolder) > 0;
    }
}
