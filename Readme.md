php-evostream
=============

Basic library for working with [evostream servers](https://evostream.com) api from php.
You can control one or more servers together.

How to install
--------------

Best way to install is to install it with composer to your project or you can use library with own cli runner for directly control evostream servers.

How to use
----------

Run basic *version* command 

```
$command = new \Tomaj\Evostream\Config\Version();
$evostream = new \Tomaj\Evostream\Evostream(new \Tomaj\Evostream\Protocol\HttpProtocol());
$result = $evostream->addServer('127.0.0.1:7777')
	->runCommand($command);

if ($result->allOk()) {
	print_r($result->getResponses());
}
```

Or you can for example set *pullStream* command to multiple servers:

```
$command = new \Tomaj\Evostream\Config\PullStream();
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

1. add other commands
2. change configs to commands
3. separate commands to groups (namespaces)
4. implement telnet protocol