<?php

namespace Tomaj\Evostream\Command;

/**
 * @method setEnabled($enabled)
 */
class SetAuthentication extends Command
{
    protected $enabled;

    public function name()
    {
        return 'setAuthentication';
    }

    public function valid()
    {
        return strlen($this->enabled) > 0;
    }
}
