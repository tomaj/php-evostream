<?php

namespace Tomaj\Evostream\Command;

class ListStorage extends Command
{
    public function name()
    {
        return 'listStorage';
    }

    public function valid()
    {
        return true;
    }
}
