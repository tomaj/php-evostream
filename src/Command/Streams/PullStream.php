<?php

namespace Tomaj\Evostream\Command;

class PullStream extends Command
{
    protected $uri;

    protected $keepAlive;

    protected $localStreamName;

    protected $forceTcp;

    protected $tcUrl;

    protected $pageUrl;

    protected $swfUrl;

    protected $rangeStart;

    protected $rangeEnd;

    protected $ttl;

    protected $tos;

    protected $rtcpDetectionInterval;

    protected $emulateUserAgent;

    protected $isAudio;

    protected $audioCodecBytes;

    protected $spsBytes;

    protected $ppsBytes;

    protected $ssmIp;

    protected $httpProxy;

    public function name()
    {
        return 'pullStream';
    }

    public function valid()
    {
        return strlen($this->uri) > 0;
    }
}
