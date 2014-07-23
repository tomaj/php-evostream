<?php

namespace Tomaj\Evostream\Command;

class ResetMaxFdCounters extends Command
{
    public function name()
    {
        return 'resetMaxFdCounters';
    }

    public function valid()
    {
        return true;
    }
}
