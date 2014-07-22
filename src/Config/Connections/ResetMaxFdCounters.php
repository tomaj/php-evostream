<?php

namespace Tomaj\Evostream\Config;

class ResetMaxFdCounters extends Config
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
