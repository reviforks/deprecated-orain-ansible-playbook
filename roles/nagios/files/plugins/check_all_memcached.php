<?php
# check all memcached servers - Nagios plugin
# Modified from Wikimedia's puppet repo for use on Orain
# Source: https://github.com/wikimedia/operations-puppet/blob/production/files/icinga/check_all_memcached.php

$wgMemCachedServers[] = '167.88.113.190:11211';
$OK=0;
$WARNING=1;
$CRITICAL=2;

$statuscode = array( $OK => 'OK', $WARNING => 'WARNING', $CRITICAL => 'CRITICAL' );
$crit_hosts = array();
$message = "Could not connect: ";
$hosts_string="";

function nagios_return( $result, $message ) {
	global $statuscode;
	print "MEMCACHED {$statuscode[$result]} - $message\n";
	exit( $result );
}

if (isset($wgMemCachedServers)) {
	foreach ( $wgMemCachedServers as $server ) {
		list( $host, $port ) = explode( ':', $server );

		#DEBUG# echo "connecting to host: $host\n";
		$fp = @fsockopen( $host, $port, $errno, $errstr, 3 );
		if ( !$fp ) {
			$crit_hosts[] = "${host}:${port} ($errstr) ";
		} else {
			@fwrite($fp, "stats\r\n");
			stream_set_timeout($fp, 2);
			$res = @fread($fp, 2000);
			$info = @stream_get_meta_data($fp);
			fclose($fp);

			if ($info['timed_out']) {
				$crit_hosts[] = "${host}:${port} (timeout) ";
			}
		}
	}

	if (count($crit_hosts) == 0 ) {
		nagios_return( $OK, "All memcacheds are online" );
	} else {
		foreach ( $crit_hosts as $crit_host ) {
			$hosts_string .= $crit_host;
		}
		nagios_return( $CRITICAL, "${message} ${hosts_string}" );
	}
} else {
nagios_return( $WARNING, "check check_all_memcached.php or mc.php - we should not be here" );
}
