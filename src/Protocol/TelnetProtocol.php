<?php

namespace Tomaj\Evostream\Protocol;

use Tomaj\Evostream\EvostreamException;

class TelnetProtocol implements ProtocolInterface
{
    public function call($serverAddress, $functionName, $params)
    {
        throw new EvostreamException('Not implemented yet');
    }
}
