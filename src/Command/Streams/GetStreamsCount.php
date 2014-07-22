<?php

namespace Tomaj\Evostream\Command;

class GetStreamsCount extends Command
{
    public function name()
    {
        return 'getStreamsCount';
    }

    public function valid()
    {
        return true;
    }
}
