<?php

namespace Tomaj\Evostream\Command;

class Help extends Command
{
    public function name()
    {
        return 'help';
    }

    public function valid()
    {
        return true;
    }
}
