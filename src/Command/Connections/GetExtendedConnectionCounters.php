<?php

namespace Tomaj\Evostream\Command;

class GetExtendedConnectionCounters extends Command
{
    public function name()
    {
        return 'getExtendedConnectionCounters';
    }

    public function valid()
    {
        return true;
    }
}
