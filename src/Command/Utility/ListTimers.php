<?php

namespace Tomaj\Evostream\Command;

class ListTimers extends Command
{
    public function name()
    {
        return 'listTimers';
    }

    public function valid()
    {
        return true;
    }
}
