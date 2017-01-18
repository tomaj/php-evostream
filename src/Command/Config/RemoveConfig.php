<?php

namespace Tomaj\Evostream\Command;

/**
 * @method setId($id)
 * @method setGroupName($groupName)
 * @method setRemoveHlsHdsFiles($removeHlsHdsFiles)
 */
class RemoveConfig extends Command
{
    protected $id;

    protected $groupName;

    protected $removeHlsHdsFiles;

    public function name()
    {
        return 'removeConfig';
    }

    public function valid()
    {
        return (isset($this->id) && $this->id > 0) || (isset($this->groupName) && strlen($this->groupName) > 0);
    }
}
