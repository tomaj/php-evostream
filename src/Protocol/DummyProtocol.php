<?php

namespace Tomaj\Evostream\Protocol;

/**
 * Dummy protocol
 *
 * - using for testing communication between php-evostrem library and evostreamserver
 */
class DummyProtocol implements ProtocolInterface
{
    private $callsCounter = 0;

    private $lastServerAddress;

    private $lastFunctionName;

    private $lastParams;

    private $responses = array();

    public function call($serverAddress, $functionName, $params)
    {
        $this->callsCounter = $this->callsCounter + 1;
        $this->lastServerAddress = $serverAddress;
        $this->lastFunctionName = $functionName;

        $this->lastParams = $params;
        if (count($this->responses) == 0) {
            return null;
        }
        return array_pop($this->responses);
    }

    public function addResponse($response)
    {
        $this->responses[] = $response;
    }

    public function getCallsCount()
    {
        return $this->callsCounter;
    }

    public function getLastServerAddress()
    {
        return $this->lastServerAddress;
    }

    public function getLastFunctionName()
    {
        return $this->lastFunctionName;
    }

    public function getLastParams()
    {
        return $this->lastParams;
    }

    public function getPlainLastParams()
    {
        return base64_decode($this->getLastParams());
    }

    public function containsLastParam($key, $value)
    {
        $params = explode(' ', $this->getPlainLastParams());
        foreach ($params as $param) {
            list($paramKey, $paramValue) = explode('=', $param);
            if ($paramKey == $key && $paramValue == $value) {
                return true;
            }
        }
        return false;
    }

    public function getLastParamsCount()
    {
        return count(explode(' ', $this->getPlainLastParams()));
    }
}
