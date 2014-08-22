<?php
$wgObjectCaches['redis'] = array(
    'class'             => 'RedisBagOStuff',
    'servers'           => array( '10.131.243.247:6379' ),
    'password'          => '{{redis_password}}',
);

$wgJobTypeConf['default'] = array(
    'class'         => 'JobQueueRedis',
    'redisServer'   => '10.131.243.247:6379',
    'redisConfig'   => array(), // Keep blank array here
);

$wgMainCacheType = 'redis';
$wgSessionCacheType = 'redis';
 
$wgMessageCacheType = 'redis';
$wgParserCacheType = 'redis';
$wgLanguageConverterCacheType = 'redis';
