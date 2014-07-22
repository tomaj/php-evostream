<?php

namespace Tomaj\Evostream\Config;

class RemoveStorage extends Config
{
    protected $mediaFolder;

    public function name()
    {
        return 'removeStorage';
    }

    public function valid()
    {
        return strlen($this->mediaFolder) > 0;
    }
}
