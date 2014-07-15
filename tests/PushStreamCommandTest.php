<?php

use Tomaj\Evostream\Evostream;
use Tomaj\Evostream\Config\PushStream;
use Tomaj\Evostream\Protocol\DummyProtocol;

require dirname(__FILE__) . '/../vendor/autoload.php';

class PushStreamCommandTest extends PHPUnit_Framework_TestCase
{
    public function testTrue()
    {
        $this->assertTrue(TRUE);
    }

    public function testPushStreamCommand()
    {
        $pushStreamConfig = new PushStream();
        $pushStreamConfig->setUri('http://test.com');
        $pushStreamConfig->setLocalStreamName('testname');

        $dummyProtocol = new DummyProtocol();
        $dummyProtocol->addResponse(array(
            'data' => array('a' => 'b', 'c' => 'd'),
            'description' => 'test description',
            'status' => 'SUCCESS',
        ));

        $evostream = new Evostream($dummyProtocol);
        $result = $evostream->addServer('127.0.0.1:1234')
            ->pushStream($pushStreamConfig);
            
        $this->assertEquals(true, $result->allOk());
        $this->assertEquals(1, count($result->getResponses()));
        $this->assertEquals(1, $dummyProtocol->getCallsCount());
        $this->assertEquals('127.0.0.1:1234', $dummyProtocol->getLastServerAddress());
        $this->assertEquals('pushStream', $dummyProtocol->getLastFunctionName());
        $this->assertTrue($dummyProtocol->containsLastParam('uri', 'http://test.com'));
        $this->assertTrue($dummyProtocol->containsLastParam('localStreamName', 'testname'));
    }

    public function testPushStreamCommandRetursFail()
    {
        $pushStreamConfig = new PushStream();
        $pushStreamConfig->setUri('http://test.com');
        $pushStreamConfig->setLocalStreamName('testname');

        $dummyProtocol = new DummyProtocol();
        $dummyProtocol->addResponse(array(
            'data' => array('a' => 'b', 'c' => 'd'),
            'description' => 'test description',
            'status' => 'FAIL',
        ));

        $evostream = new Evostream($dummyProtocol);
        $result = $evostream->addServer('127.0.0.1:1234')
            ->pushStream($pushStreamConfig);
            
        $this->assertEquals(false, $result->allOk());
        $this->assertEquals(1, count($result->getResponses()));
        $this->assertEquals(1, $dummyProtocol->getCallsCount());
        $this->assertEquals('127.0.0.1:1234', $dummyProtocol->getLastServerAddress());
        $this->assertEquals('pushStream', $dummyProtocol->getLastFunctionName());
        $this->assertTrue($dummyProtocol->containsLastParam('uri', 'http://test.com'));
        $this->assertTrue($dummyProtocol->containsLastParam('localStreamName', 'testname'));
    }

    /**
     * @expectedException \Tomaj\Evostream\Config\ConfigException
     */
    public function testPushStreamThrowExceptionOnInvalidConfig()
    {
        $pushStreamConfig = new PushStream();
        $dummyProtocol = new DummyProtocol();
        $evostream = new Evostream($dummyProtocol);

        $result = $evostream->addServer('127.0.0.1:1234')
            ->pushStream($pushStreamConfig);
    }
}