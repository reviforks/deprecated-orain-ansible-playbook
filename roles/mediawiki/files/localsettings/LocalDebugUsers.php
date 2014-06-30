<?php

/**
 * This allows users that are allow to 'debug' to have extra debugging information
 */

$wgHooks['ParserFirstCallInit'][] = 'ifUserCanDebug';
function ifUserCanDebug() {
	global $wgUser, $wgShowExceptionDetails, $wgDebugToolbar, $wgDevelopmentWarnings, $wgShowSQLErrors, $wgShowDBErrorBacktrace;
	if ( $wgUser->isAllowed( 'debug' ) ) {
		error_reporting( -1 );
		ini_set( 'display_errors', 1 );
		$wgShowExceptionDetails = true;
		$wgDebugToolbar = true;
		$wgDevelopmentWarnings = true;
		$wgShowSQLErrors = true;
		$wgShowDBErrorBacktrace = true;
	}
}
