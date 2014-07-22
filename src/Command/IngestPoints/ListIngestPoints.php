<?php

namespace Tomaj\Evostream\Command;

class ListIngestPoints extends Command
{
    public function name()
    {
        return 'listIngestPoints';
    }

    public function valid()
    {
        return true;
    }
}
