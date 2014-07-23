<?php

namespace Tomaj\Evostream\Command;

class PushStream extends Command
{
    protected $uri;

    protected $localStreamName;

    protected $tos;

    protected $keepAlive;

    protected $targetStreamName;

    protected $targetStreamType;

    protected $emulateUserAgent;

    protected $rtmpAbsoluteTimestamps;

    protected $swfUrl;

    protected $pageUrl;

    protected $tcUrl;

    protected $ttl;

    public function name()
    {
        return 'pushStream';
    }

    public function valid()
    {
        return strlen($this->uri) > 0 && strlen($this->localStreamName) > 0;
    }
}
