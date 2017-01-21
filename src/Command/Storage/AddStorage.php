<?php

namespace Tomaj\Evostream\Command;

/**
 * @method setMediaFolder($mediaFolder)
 * @method setDescription($description)
 * @method setClientSideBuffer($clientSideBuffer)
 * @method setEnableStats($enableStats)
 * @method setExternalSeekGenerator($externalSeekGenerator)
 * @method setKeyframeSeek($keyframeSeek)
 * @method setMetaFolder($metaFolder)
 * @method setName($name)
 * @method setSeekGranularity($seekGranularity)
 */
class AddStorage extends Command
{
    protected $mediaFolder;

    protected $description;

    protected $clientSideBuffer;

    protected $enableStats;

    protected $externalSeekGenerator;

    protected $keyframeSeek;

    protected $metaFolder;

    protected $name;

    protected $seekGranularity;

    public function name()
    {
        return 'addStorage';
    }

    public function valid()
    {
        return strlen($this->mediaFolder);
    }
}
