<?php

$wmgLogDir = "/var/log/mediawiki";

$wgDebugLogFile = "$wmgLogDir/$wmgHostname.log";
$wgDBerrorLog = "$wmgLogDir/debuglogs/database.log";
$wgDebugLogGroups = array(
	'404' => "$wmgLogDir/debuglogs/404.log",
	'api' => "$wmgLogDir/debuglogs/api.log",
	'captcha' => "$wmgLogDir/debuglogs/captcha.log",
	'CentralAuth' => "$wmgLogDir/debuglogs/CentralAuth.log",
	'CirrusSearch' => "$wmgLogDir/debuglogs/CirrusSearch.log",
	'collection' => "$wmgLogDir/debuglogs/collection.log",
	'exception' => "$wmgLogDir/debuglogs/exception.log",
	'Math' => "$wmgLogDir/debuglogs/Math.log",
	'OAuth' => "$wmgLogDir/debuglogs/OAuth.log",
	'thumbnail' => "$wmgLogDir/debuglogs/thumbnail.log",
	'torblock' => "$wmgLogDir/debuglogs/torblock.log",
);
