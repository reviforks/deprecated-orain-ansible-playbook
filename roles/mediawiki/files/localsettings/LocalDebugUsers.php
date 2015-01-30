<?php

/**
 * This allows users that are allow to 'debug' to have extra debugging information
 */

$wgHooks['ParserFirstCallInit'][] = 'ifUserCanDebug';
function ifUserCanDebug() {
	global $wgUser, $wgShowExceptionDetails, $wgDebugToolbar, $wgDevelopmentWarnings, $wgShowSQLErrors, $wgShowDBErrorBacktrace;
	if ( $wgUser->isAllowed( 'debug' ) ) {
		//error_reporting( -1 ); // phpredis introduces a *lot* of array issues due to live hack within MediaWiki
		error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT); //Here, try this.  Should limit the displayed errors to only the important ones.
		ini_set( 'display_errors', 1 );
		$wgShowExceptionDetails = true;
		$wgDebugToolbar = true;
		$wgDevelopmentWarnings = true;
		$wgShowSQLErrors = true;
		$wgShowDBErrorBacktrace = true;
	}
}
