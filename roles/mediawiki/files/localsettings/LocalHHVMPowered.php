<?php

/**
 * This creates a new variable (wgPoweredByHHVM) which can be used to decide whether
 * HHVM is running. Nice for scripts.
 *
 * From WikimediaEvents (https://www.mediawiki.org/wiki/Extension:WikimediaEvents)
 */

$wgHooks['MakeGlobalVariablesScript'][] = 'onMakeGlobalVariablesScript';

function onMakeGlobalVariablesScript( &$vars, OutputPage $out ) {
	if ( defined( 'HHVM_VERSION' ) ) {
		$vars['wgPoweredByHHVM'] = true;
	}
}
