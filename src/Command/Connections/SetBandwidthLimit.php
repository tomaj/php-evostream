<?php

namespace Tomaj\Evostream\Command;

/**
 * @method setIn($in)
 * @method setOut($out)
 */
class SetBandwidthLimit extends Command
{
    protected $in;

    protected $out;

    public function name()
    {
        return 'setBandwidthLimit';
    }

    public function valid()
    {
        return strlen($this->in) > 0 && strlen($this->out) > 0;
    }
}
