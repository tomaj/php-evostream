<?php

namespace Tomaj\Evostream\Command;

class ListStreamsIds extends Command
{
    public function name()
    {
        return 'listStreamsIds';
    }

    public function valid()
    {
        return true;
    }
}
