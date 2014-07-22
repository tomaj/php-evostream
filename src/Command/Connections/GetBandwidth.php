<?php

namespace Tomaj\Evostream\Command;

class GetBandwidth extends Command
{
    public function name()
    {
        return 'getBandwidth';
    }

    public function valid()
    {
        return true;
    }
}
