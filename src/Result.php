<?php

namespace Tomaj\Evostream;

class Result
{
    private $results = array();

    private $responses = array();

    public function allOk()
    {
        if (count($this->results) == 0) {
            return false;
        }
        foreach ($this->results as $result) {
            if ($result != 'SUCCESS') {
                return false;
            }
        }
        return true;
    }

    public function addResult($serverAddress, $status, $response)
    {
        $this->results[$serverAddress] = $status;
        $this->responses[$serverAddress] = $response;
    }

    public function reset()
    {
        $this->results = array();
        $this->responses = array();
    }

    public function getResponses()
    {
        return $this->responses;
    }
}
