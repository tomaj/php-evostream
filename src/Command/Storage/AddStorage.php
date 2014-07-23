<?php

namespace Tomaj\Evostream\Command;

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
