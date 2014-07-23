<?php

namespace Tomaj\Evostream\Command;

class ResetTotalFdCounters extends Command
{
    public function name()
    {
        return 'resetTotalFdCounters';
    }

    public function valid()
    {
        return true;
    }
}
