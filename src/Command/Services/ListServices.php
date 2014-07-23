<?php

namespace Tomaj\Evostream\Command;

class ListServices extends Command
{
    public function name()
    {
        return 'listServices';
    }

    public function valid()
    {
        return true;
    }
}
