<?php

# Add the function below to the correct hook
$wgHooks['SkinAfterBottomScripts'][] = 'lfPiwikScript';

function lfPiwikScript( $skin, &$text = '' ) {
	global $wmgPiwikSiteID, $wgUser;
	if ( !$wmgPiwikSiteID ) {
		$wmgPiwikSiteID = 1;
	}
	// Disabled Piwik admin blacklisting below Kudu 12/11/13
	/* if ( $wgUser->isAllowed('noanalytics') ) {
		$text .= "<!-- Piwik code omitted -->\n";
		return true;
	} */
	$id = strval( $wmgPiwikSiteID );
	$title = $skin->getRelevantTitle();
	$jstitle = Xml::encodeJsVar( $title->getPrefixedText() );
	$urltitle = $title->getPrefixedURL();
	$userType = $wgUser->isLoggedIn() ? "User" : "Anonymous";
	$text .= <<<SCRIPT
<!-- Piwik -->
<script type="text/javascript">
	var _paq = _paq || [];
	_paq.push(["trackPageView"]);
	_paq.push(["enableLinkTracking"]);

	(function() {
		var u = "http://piwik.orain.org";
		_paq.push(["setTrackerUrl", u+"piwik.php"]);
		_paq.push(['setDocumentTitle', {$jstitle}]);
		_paq.push(["setSiteId", "{$id}"]);
		_paq.push(["setCustomVariable", 1, "userType", "{$userType}", "visit"]);
		var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0]; g.type="text/javascript";
		g.defer=true; g.async=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
	})();
</script>
<!-- End Piwik Code -->
<!-- Piwik Image Tracker -->
<noscript>
<img src="//piwik.orain.org/piwik.php?idsite={$id}&amp;rec=1&amp;action_name={$urltitle}" style="border:0" alt="" />
</noscript>
<!-- End Piwik -->
SCRIPT;
	return true;
}
