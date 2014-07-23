<?php

namespace Tomaj\Evostream\Command;

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
