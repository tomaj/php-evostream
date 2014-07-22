<?php

namespace Tomaj\Evostream\Command;

class Version extends Command
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
