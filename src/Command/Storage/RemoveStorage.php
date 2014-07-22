<?php

namespace Tomaj\Evostream\Command;

class RemoveStorage extends Command
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
