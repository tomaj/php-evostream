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

```
$ composer require tomaj/php-evostream
```

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

Each Evostream command is implemented in library and command name is the same as evostream api call bud with upper first letter of call name. More info about mapping Evostream api command to php library command is down in chapter *Commands List*.


How to use from cli
-------------------

Cli wrapper is simple command line tool for command evostream server/s.

Example use from console:

```
php cli/run.php 129.168.1.101 pullStream uri=rtmp://... localStreamName=teststream
```

Commands list
-------------

All [EvoStream](https://evostream.com) api commands are available via php library.

####Streams

- **pullStream** - Tomaj\Evostream\Command\PullStream
- **pushStream** - Tomaj\Evostream\Command\PushStream
- **createHLSStream** - Tomaj\Evostream\Command\CreateHLSStream
- **createHDSStream** - Tomaj\Evostream\Command\CreateHDSStream
- **createMSSStream** - Tomaj\Evostream\Command\CreateMSSStream
- **record** - Tomaj\Evostream\Command\Record
- **transcode** - Tomaj\Evostream\Command\Transcode
- **listStreamsIds** - Tomaj\Evostream\Command\ListStreamsIds
- **getStreamInfo** - Tomaj\Evostream\Command\GetStreamInfo
- **listStreams** - Tomaj\Evostream\Command\ListStreams
- **getStreamsCount** - Tomaj\Evostream\Command\GetStreamsCount
- **shutdownStream** - Tomaj\Evostream\Command\ShutdownStream
- **listConfig** - Tomaj\Evostream\Command\ListConfig
- **removeConfig** - Tomaj\Evostream\Command\RemoveConfig
- **addStreamAlias** - Tomaj\Evostream\Command\AddStreamAlias
- **listStreamAliases** - Tomaj\Evostream\Command\ListStreamAliases
- **removeStreamAlias** - Tomaj\Evostream\Command\RemoveStreamAlias
- **flushStreamAliases** - Tomaj\Evostream\Command\FlushStreamAliases
- **createIngestPoint** - Tomaj\Evostream\Command\CreateIngestPoint
- **removeIngestPoint** - Tomaj\Evostream\Command\RemoveIngestPoint
- **listIngestPoints** - Tomaj\Evostream\Command\ListIngestPoints

####Utility

- **launchProcess** - Tomaj\Evostream\Command\LaunchProcess
- **setTimer** - Tomaj\Evostream\Command\SetTimer
- **listTimers** - Tomaj\Evostream\Command\ListTimers
- **removeTimer** - Tomaj\Evostream\Command\RemoveTimer
- **insertPlaylistItem** - Tomaj\Evostream\Command\InsertPlaylistItem
- **listStorage** - Tomaj\Evostream\Command\ListStorage
- **addStorage** - Tomaj\Evostream\Command\AddStorage
- **removeStorage** - Tomaj\Evostream\Command\RemoveStorage
- **setAuthentication** - Tomaj\Evostream\Command\SetAuthentication
- **setLogLevel** - Tomaj\Evostream\Command\SetLogLevel
- **version** - Tomaj\Evostream\Command\Version
- **help** - Tomaj\Evostream\Command\Help
- **shutdownServer** - Tomaj\Evostream\Command\ShutdownServer

####Connections

- **listConnectionsIds** - Tomaj\Evostream\Command\ListConnectionsIds
- **getConnectionInfo** - Tomaj\Evostream\Command\GetConnectionInfo
- **listConnections** - Tomaj\Evostream\Command\ListConnections
- **getExtendedConnectionCounters** - Tomaj\Evostream\Command\GetExtendedConnectionCounters
- **resetMaxFdCounters** - Tomaj\Evostream\Command\ResetMaxFdCounters
- **resetTotalFdCounters** - Tomaj\Evostream\Command\ResetTotalFdCounters
- **getConnectionsCount** - Tomaj\Evostream\Command\GetConnectionsCount
- **getConnectionsCountLimit** - Tomaj\Evostream\Command\GetConnectionsCountLimit
- **setConnectionsCountLimit** - Tomaj\Evostream\Command\SetConnectionsCountLimit
- **getBandwidth** - Tomaj\Evostream\Command\GetBandwidth
- **setBandwidthLimit** - Tomaj\Evostream\Command\SetBandwidthLimit

####Services

- **listServices** - Tomaj\Evostream\Command\ListServices
- **createService** - Tomaj\Evostream\Command\CreateService
- **enableService** - Tomaj\Evostream\Command\EnableService
- **shutdownService** - Tomaj\Evostream\Command\ShutdownService


Future Todo
-----------

1. Implement telnet protocol
