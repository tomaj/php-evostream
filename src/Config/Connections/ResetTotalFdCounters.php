<?php

namespace Tomaj\Evostream\Config;

class ResetTotalFdCounters extends Config
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
