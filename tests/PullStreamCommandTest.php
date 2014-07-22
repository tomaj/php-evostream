<?php

use Tomaj\Evostream\Evostream;
use Tomaj\Evostream\Command\PullStream;
use Tomaj\Evostream\Protocol\DummyProtocol;

require dirname(__FILE__) . '/../vendor/autoload.php';

class PullStreamCommandTest extends PHPUnit_Framework_TestCase
{
    public function testTrue()
    {
        $this->assertTrue(TRUE);
    }

    public function testPullStreamCommand()
    {
        $pullStreamConfig = new PullStream();
        $pullStreamConfig->setUri('http://test.com');
        $pullStreamConfig->setLocalStreamName('testname');

        $dummyProtocol = new DummyProtocol();
        $dummyProtocol->addResponse(array(
            'data' => array('a' => 'b', 'c' => 'd'),
            'description' => 'test description',
            'status' => 'SUCCESS',
        ));

        $evostream = new Evostream($dummyProtocol);
        $result = $evostream->addServer('127.0.0.1:1234')
            ->pullStream($pullStreamConfig);
            
        $this->assertEquals(true, $result->allOk());
        $this->assertEquals(1, count($result->getResponses()));
        $this->assertEquals(1, $dummyProtocol->getCallsCount());
        $this->assertEquals('127.0.0.1:1234', $dummyProtocol->getLastServerAddress());
        $this->assertEquals('pullStream', $dummyProtocol->getLastFunctionName());
        $this->assertTrue($dummyProtocol->containsLastParam('uri', 'http://test.com'));
        $this->assertTrue($dummyProtocol->containsLastParam('localStreamName', 'testname'));
    }

    public function testPullStreamCommandRetursFail()
    {
        $pullStreamConfig = new PullStream();
        $pullStreamConfig->setUri('http://test.com');
        $pullStreamConfig->setLocalStreamName('testname');

        $dummyProtocol = new DummyProtocol();
        $dummyProtocol->addResponse(array(
            'data' => array('a' => 'b', 'c' => 'd'),
            'description' => 'test description',
            'status' => 'FAIL',
        ));

        $evostream = new Evostream($dummyProtocol);
        $result = $evostream->addServer('127.0.0.1:1234')
            ->pullStream($pullStreamConfig);
            
        $this->assertEquals(false, $result->allOk());
        $this->assertEquals(1, count($result->getResponses()));
        $this->assertEquals(1, $dummyProtocol->getCallsCount());
        $this->assertEquals('127.0.0.1:1234', $dummyProtocol->getLastServerAddress());
        $this->assertEquals('pullStream', $dummyProtocol->getLastFunctionName());
        $this->assertTrue($dummyProtocol->containsLastParam('uri', 'http://test.com'));
        $this->assertTrue($dummyProtocol->containsLastParam('localStreamName', 'testname'));
    }

    /**
     * @expectedException \Tomaj\Evostream\Command\CommandException
     */
    public function testPullStreamThrowExceptionOnInvalidConfig()
    {
        $pullStreamConfig = new PullStream();
        $dummyProtocol = new DummyProtocol();
        $evostream = new Evostream($dummyProtocol);

        $result = $evostream->addServer('127.0.0.1:1234')
            ->pullStream($pullStreamConfig);
    }
}