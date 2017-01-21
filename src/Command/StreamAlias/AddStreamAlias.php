<?php

namespace Tomaj\Evostream\Command;

/**
 * @method setLocalStreamName($localStreamName)
 * @method setAliasName($aliasName)
 */
class AddStreamAlias extends Command
{
    protected $localStreamName;

    protected $aliasName;

    public function name()
    {
        return 'addStreamAlias';
    }

    public function valid()
    {
        return strlen($this->localStreamName) > 0 && strlen($this->aliasName) > 0;
    }
}
