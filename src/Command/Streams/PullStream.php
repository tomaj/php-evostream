<?php

namespace Tomaj\Evostream\Command;

/**
 * @method setUri($uri)
 * @method setKeepAlive($keepAlive)
 * @method setlocalStreamName($localStreamName)
 * @method setForceTcp($forceTcp)
 * @method setTcUrl($tcUrl)
 * @method setPageUrl($pageUrl)
 * @method setSwfUrl($swfUrl)
 * @method setRangeStart($rangeStart)
 * @method setRangeEnd($rangeEnd)
 * @method setTtl($ttl)
 * @method setTos($tos)
 * @method setRtcpDetectionInterval($rtcpDetectionInterval)
 * @method setEmulateUserAgent($emulateUserAgent)
 * @method setIsAudio($isAudio)
 * @method setAudioCodecBytes($audioCodecBytes)
 * @method setSpsBytes($spsBytes)
 * @method setPpsBytes($ppsBytes)
 * @method setSsmIp($ssmIp)
 * @method setHttpProxy($httpProxy)
 */
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
