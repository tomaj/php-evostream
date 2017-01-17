<?php

namespace Tomaj\Evostream\Command;

/**
 * @method setSource($source)
 * @method setDestinations($destinations)
 * @method setTargetStreamNames($targetStreamNames)
 * @method setGroupName($groupName)
 * @method setVideoBitrates($videoBitrates)
 * @method setVideoSizes($videoSizes)
 * @method setVideoAdvancedParamsProfiles($videoAdvancedParamsProfiles)
 * @method setAudioBitrates($audioBitrates)
 * @method setAudioChannelsCounts($audioChannelsCounts)
 * @method setAudioFrequencies($audioFrequencies)
 * @method setAudioAdvancedParamsProfiles($audioAdvancedParamsProfiles)
 * @method setOverlayss($overlays)
 * @method setCroppings($croppings)
 * @method setKeepAlive($keepAlive)
 */
class Transcode extends Command
{
    protected $source;

    protected $destinations;

    protected $targetStreamNames;

    protected $groupName;

    protected $videoBitrates;

    protected $videoSizes;

    protected $videoAdvancedParamsProfiles;

    protected $audioBitrates;

    protected $audioChannelsCounts;

    protected $audioFrequencies;

    protected $audioAdvancedParamsProfiles;

    protected $overlays;

    protected $croppings;

    protected $keepAlive;

    public function name()
    {
        return 'transcode';
    }

    public function valid()
    {
        return strlen($this->source) > 0 && strlen($this->destinations) > 0;
    }
}
