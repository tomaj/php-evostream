<?php

namespace Tomaj\Evostream\Protocol;

interface ProtocolInterface
{
    public function call($serverAddress, $functionName, $params);
}
