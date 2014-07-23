php-evostream
=============

Basic library for working with [evostream servers](https://evostream.com) api from php.
You can control one or more servers together.

[![Build Status](https://travis-ci.org/tomaj/php-evostream.svg?branch=master)](https://travis-ci.org/tomaj/php-evostream)

[![Latest Unstable Version](https://poser.pugx.org/tomaj/php-evostream/v/unstable.svg)](https://packagist.org/packages/tomaj/php-evostream)
[![Latest Stable Version](https://poser.pugx.org/tomaj/php-evostream/v/stable.svg)](https://packagist.org/packages/tomaj/php-evostream)
[![License](https://poser.pugx.org/tomaj/php-evostream/license.svg)](https://packagist.org/packages/tomaj/php-evostream)


How to install
--------------

Best way to install is to install it with composer to your project or you can use library with own cli runner for directly control evostream servers.

How to use
----------

Run basic *version* command 

```
$command = new \Tomaj\Evostream\Command\Version();
$evostream = new \Tomaj\Evostream\Evostream(new \Tomaj\Evostream\Protocol\HttpProtocol());
$result = $evostream->addServer('127.0.0.1:7777')
	->runCommand($command);

if ($result->allOk()) {
	print_r($result->getResponses());
}
```

Or you can for example set *pullStream* command to multiple servers:

```
$command = new \Tomaj\Evostream\Command\PullStream();
$command->setUri('some stream url')
	->setKeepAlive(true)
	->setLocalStreamName('some local stream url')
	->setTtl(10); // more sets available - check evostream api
$evostream = new \Tomaj\Evostream\Evostream(new \Tomaj\Evostream\Protocol\HttpProtocol());
$result = $evostream->addServers(array('192.168.1.101:7777', '192.168.1.102:7777'))
	->runCommand($command);

if ($result->allOk()) {
	print_r($result->getResponses());
}
```

How to use from cli
-------------------

Example use from console:

```
php cli/run.php 129.168.1.101 pullStream uri=rtmp://... localStreamName=teststream 
```

Commands list
-------------

...todo...

Todo
----

1. implement telnet protocol