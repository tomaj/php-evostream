<?php

namespace Tomaj\Evostream\Config;

class GetStreamInfo extends Config
{
    protected $id;

    public function name()
    {
        return 'getStreamInfo';
    }

    public function valid()
    {
        return $this->id != null and $this->id > 0;
    }
}
