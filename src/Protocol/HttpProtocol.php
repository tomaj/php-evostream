<?php

namespace Tomaj\Evostream\Protocol;

class HttpProtocol implements ProtocolInterface
{
    private $timeout;

    public function __construct($timeout = 3)
    {
        if (!extension_loaded('curl')) {
            throw new ProtocolException('HttpProtocol cannot be initialized. You need to enable curl extension in your php.');
        }
        $this->timeout = $timeout;
    }

    public function call($serverAddress, $functionName, $params)
    {
        $ch = curl_init();

        $url = "http://" . $serverAddress . "/" . $functionName . '?params=' . $params;
        
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_TIMEOUT, $this->timeout);
        $res = curl_exec($ch);

        $curlErrno = curl_errno($ch);
        $curlError = curl_error($ch);

        curl_close($ch);

        if ($curlErrno > 0) {
            throw new ProtocolException('Cannot connect to server: ' . $curlError);
        }

        $result = json_decode($res);
        return $this->objectToArray($result);
    }

    private function objectToArray($input)
    {
        if (is_object($input)) {
            $input = get_object_vars($input);
        }
        if (is_array($input)) {
            return array_map(array($this, 'objectToArray'), $input);
        } else {
            return $input;
        }
    }
}
