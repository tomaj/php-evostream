<?php

namespace Tomaj\Evostream\Config;

class Version extends Config
{
    public function name()
    {
        return 'version';
    }

    public function valid()
    {
        return true;
    }
}
