<?php

namespace Tomaj\Evostream\Command;

class ListStreams extends Command
{
    public function name()
    {
        return 'listStreams';
    }

    public function valid()
    {
        return true;
    }
}
