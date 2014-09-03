<?php

/**
 * This allows users that are allowed to 'viewads' to view ads
 */

$wgHooks['ParserFirstCallInit'][] = 'ifUserCanViewAds';
function ifUserCanViewAds() {
	global $wgUser, $wgGoogleAdSenseAnonOnly;
	if ( $wgUser->isAllowed( 'viewads' ) ) {
		$wgGoogleAdSenseAnonOnly = false; // poor-ish hack right now.
	}
}
