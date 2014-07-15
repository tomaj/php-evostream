<?php

use Tomaj\Evostream\Config\PushStream;

require dirname(__FILE__). '/../../vendor/autoload.php';

class PushStreamConfigTest extends PHPUnit_Framework_TestCase
{
	public function testValidationInput()
	{
		$pushStream = new PushStream();
		$pushStream->setUri('rtpm://test.co');
		$pushStream->setLocalStreamName('test stream name');
		$this->assertTrue($pushStream->valid());
		$this->assertEquals('rtpm://test.co', $pushStream->getUri());
	}

	public function testNotValidInput()
	{
		$pushStream = new PushStream();
		$this->assertFalse($pushStream->valid());

		$pushStream = new PushStream();
		$pushStream->setIsAudio(1);
		$this->assertFalse($pushStream->valid());

		$pushStream = new PushStream();
		$pushStream->setLocalStreamName('asdsd');
		$this->assertFalse($pushStream->valid());		
		$pushStream->setUri('rtpm://test.co');
		$this->assertTrue($pushStream->valid());
	}

	public function testGetRightParams()
	{
		$pushStream = new PushStream();
		$pushStream->setUri('rtpm://test.co');
		$pushStream->setTcUrl(2);
		$pushStream->setLocalStreamName('test stream name');
		$pushStream->setKeepAlive(5);

		$params = $pushStream->getParams();
		$this->assertEquals(4, count($params));
	}
}