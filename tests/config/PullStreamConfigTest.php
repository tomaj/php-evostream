<?php

use Tomaj\Evostream\Config\PullStream;

require dirname(__FILE__). '/../../vendor/autoload.php';

class PullStreamConfigTest extends PHPUnit_Framework_TestCase
{
    public function testValidationInput()
    {
        $pullStream = new PullStream();
        $pullStream->setUri('rtpm://test.co');
        $this->assertTrue($pullStream->valid());
        $this->assertEquals('rtpm://test.co', $pullStream->getUri());
    }

    public function testNotValidInput()
    {
        $pullStream = new PullStream();
        $this->assertFalse($pullStream->valid());

        $pullStream = new PullStream();
        $pullStream->setIsAudio(1);
        $this->assertFalse($pullStream->valid());
    }

    public function testGetRightParams()
    {
        $pullStream = new PullStream();
        $pullStream->setUri('rtpm://test.co');
        $pullStream->setTcUrl(2);
        $pullStream->setLocalStreamName('test stream name');
        $pullStream->setKeepAlive(5);

        $params = $pullStream->getParams();
        $this->assertEquals(4, count($params));
    }
}