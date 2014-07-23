<?php

namespace Tomaj\Evostream\Command;

class FlushStreamAliases extends Command
{
    public function name()
    {
        return 'flushStreamAliases';
    }

    public function valid()
    {
        return true;
    }
}
