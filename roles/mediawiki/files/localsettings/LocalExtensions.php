<?php

/**
 * Load the below extensions for all wikis
 *
 * @note If you are including a new extension you should ensure it is included in
 *  the mediawiki-core repo in the extensions directory
 */
require_once( "$IP/extensions/AdminLinks/AdminLinks.php" );
require_once( "$IP/extensions/AntiSpoof/AntiSpoof.php" );
require_once( "$IP/extensions/AbuseFilter/AbuseFilter.php" );
require_once( "$IP/extensions/Babel/Babel.php" );
require_once( "$IP/extensions/CategoryTree/CategoryTree.php" );
require_once( "$IP/extensions/CentralAuth/CentralAuth.php" );
require_once( "$IP/extensions/CentralNotice/CentralNotice.php" );
require_once( "$IP/extensions/CheckUser/CheckUser.php" );
require_once( "$IP/extensions/Cite/Cite.php" );
require_once( "$IP/extensions/Cite/SpecialCite.php" );
require_once( "$IP/extensions/ConfirmEdit/Asirra.php" );
require_once( "$IP/extensions/ConfirmEdit/ConfirmEdit.php" );
require_once( "$IP/extensions/DismissableSiteNotice/DismissableSiteNotice.php" );
require_once( "$IP/extensions/intersection/DynamicPageList.php" );
require_once( "$IP/extensions/Gadgets/Gadgets.php" );
require_once( "$IP/extensions/GlobalBlocking/GlobalBlocking.php" );
require_once( "$IP/extensions/InputBox/InputBox.php" );
require_once( "$IP/extensions/Interwiki/Interwiki.php" );
require_once( "$IP/extensions/MassMessage/MassMessage.php" );
require_once( "$IP/extensions/Nuke/Nuke.php" );
require_once( "$IP/extensions/OrainMessages/OrainMessages.php" );
require_once( "$IP/extensions/ParserFunctions/ParserFunctions.php" );
require_once( "$IP/extensions/Renameuser/Renameuser.php" );
require_once( "$IP/extensions/Scribunto/Scribunto.php" );
require_once( "$IP/extensions/SimpleAntiSpam/SimpleAntiSpam.php" );
require_once( "$IP/extensions/SiteMatrix/SiteMatrix.php" );
require_once( "$IP/extensions/SpamBlacklist/SpamBlacklist.php" );
require_once( "$IP/extensions/SyntaxHighlight_GeSHi/SyntaxHighlight_GeSHi.php" );
require_once( "$IP/extensions/TemplateSandbox/TemplateSandbox.php" );
require_once( "$IP/extensions/TitleBlacklist/TitleBlacklist.php" );
require_once( "$IP/extensions/TitleKey/TitleKey.php" );
require_once( "$IP/extensions/Variables/Variables.php" );
require_once( "$IP/extensions/YouTube/YouTube.php" );
require_once( "$IP/skins/foreground/foreground.php" );
require_once( "$IP/skins/monaco/monaco.php" );
require_once( "$IP/extensions/WikiLove/WikiLove.php" );
require_once( "$IP/extensions/NativeSvgHandler/NativeSvgHandler.php" );


// Switch case
switch( $wgDBname ) {
	case 'allthetropeswiki':
		//require_once( "$IP/extensions/CreateBox/CreateBox.php" );
		require_once( "$IP/extensions/RandomSelection/RandomSelection.php" );
		require_once( "$IP/extensions/SectionHide/SectionHide.php" );
		require_once( "$IP/extensions/CSS/CSS.php" );
		require_once( "$IP/extensions/AJAXPoll/AJAXPoll.php" );
		require_once( "$IP/extensions/VoteNY/Vote.php" );
		require_once( "$IP/extensions/MultiBoilerplate/MultiBoilerplate.php" );
		$wgMultiBoilerplateOptions = false;
		$wgMultiBoilerplateDiplaySpecialPage = true;
		require_once( "$IP/extensions/HighlightLinksInCategory/HighlightLinksInCategory.php" );
		// Configurations
		$wgSectionHideShowtop = 1;
		$wgRestrictDisplayTitle = false;
		require_once( "$IP/extensions/NewUserMessage/NewUserMessage.php" );
		require_once( "$IP/extensions/SubpageFun/SubpageFun.php" );
		require_once("$IP/extensions/SubPageList3/SubPageList3.php");
		require_once( "$IP/extensions/Tabs/Tabs.php" );
		require_once( "$IP/extensions/RegexFun/RegexFun.php" );
		require_once( "$IP/extensions/Arrays/Arrays.php" );
		require_once( "$IP/extensions/ImageMap/ImageMap.php" );
		require_once( "$IP/extensions/Poem/Poem.php" );
		break;
	case 'botwiki':
		require_once( "$IP/extensions/LabeledSectionTransclusion/lst.php" );
		require_once( "$IP/extensions/LabeledSectionTransclusion/lsth.php" );
		break;
	case 'foodopediawiki':
		require_once( "$IP/extensions/Comments/Comment.php" );
		break;
	case 'loginwiki':
		// Blank comment to keep this in the statement per John's request
		break;
	case 'metawiki':
		require_once( "$IP/extensions/CreateWiki/CreateWiki.php" );
		break;
	case 'mediawikitesterswiki':
		$wgCategoryTreeMaxChildren = 2000;
		require_once( "$IP/extensions/CreateBox/CreateBox.php" );
		require_once( "$IP/extensions/Disambiguator/Disambiguator.php" );
		require_once( "$IP/extensions/HeaderTabs/HeaderTabs.php" );
		require_once( "$IP/extensions/ImageMap/ImageMap.php" );
		require_once( "$IP/extensions/Poem/Poem.php" );
		require_once( "$IP/extensions/RandomSelection/RandomSelection.php" );
		require_once( "$IP/extensions/SkinPerPage/SkinPerPage.php" );
		break;
	case 'spiralwiki':
		require_once( "$IP/extensions/cldr/cldr.php" );
		break;
	case 'extloadwiki':
		// all extensions are loaded on this wiki
		require_once( "$IP/extensions/cldr/cldr.php" );
		require_once( "$IP/extensions/CreateBox/CreateBox.php" );
		require_once( "$IP/extensions/RandomSelection/RandomSelection.php" );
		require_once( "$IP/extensions/SectionHide/SectionHide.php" );
		require_once( "$IP/extensions/LabeledSectionTransclusion/lst.php" );
		require_once( "$IP/extensions/Comments/Comment.php" );
		require_once( "$IP/extensions/CreateWiki/CreateWiki.php" );
		require_once( "$IP/extensions/Disambiguator/Disambiguator.php" );
		require_once( "$IP/extensions/HeaderTabs/HeaderTabs.php" );
		require_once( "$IP/extensions/ImageMap/ImageMap.php" );
		require_once( "$IP/extensions/Poem/Poem.php" );
		require_once( "$IP/extensions/SkinPerPage/SkinPerPage.php" );
		require_once( "$IP/extensions/CSS/CSS.php" );
		require_once( "$IP/extensions/AJAXPoll/AJAXPoll.php" );
		require_once( "$IP/extensions/VoteNY/Vote.php" );
		require_once( "$IP/extensions/MultiBoilerplate/MultiBoilerplate.php" );
		require_once( "$IP/extensions/HighlightLinksInCategory/HighlightLinksInCategory.php" );
		require_once( "$IP/extensions/NewUserMessage/NewUserMessage.php" );
		require_once( "$IP/extensions/SubpageFun/SubpageFun.php" );
		require_once( "$IP/extensions/SubPageList3/SubPageList3.php" );
		require_once( "$IP/extensions/Tabs/Tabs.php" );
		require_once( "$IP/extensions/RegexFun/RegexFun.php" );
		require_once( "$IP/extensions/Arrays/Arrays.php" );
		require_once( "$IP/extensions/TorBlock/TorBlock.php" );
		require_once( "$IP/extensions/ConfirmEdit/Asirra.php" );
		require_once( "$IP/extensions/ConfirmEdit/ConfirmEdit.php" );
		require_once( "$IP/extensions/TocTree/TocTree.php" );
		require_once( "$IP/extensions/RefreshSpecial/RefreshSpecial.php" );
		require_once( "$IP/extensions/MultiCategorySearch/MultiCategorySearch.php" );
		require_once( "$IP/extensions/CategoryTagSorter/CategoryTagSorter.php" );

		break;
	case 'cpsinfowiki':
		require_once( "$IP/extensions/CreateBox/CreateBox.php" );
		break;
	case 'verkeerwiki':
		require_once( "$IP/extensions/TorBlock/TorBlock.php" );
		break;
	case 'jossewiki':
		require_once( "$IP/extensions/Poem/Poem.php" );
		break;
}


// Load InterwikiMagic on all wikis except for metawiki
if ( $wgDBname !== 'metawiki' ) {
	require_once( "$IP/extensions/InterwikiMagic/InterwikiMagic.php" );
}

//wmgUSE
if ( $wmgUseAPISandbox ) {
	require_once( "$IP/extensions/ApiSandbox/ApiSandbox.php" );
}

if ( $wmgUseBetaFeatures ) {
	require_once( "$IP/extensions/BetaFeatures/BetaFeatures.php" ); //Get BF
	require_once( "$IP/extensions/MultimediaViewer/MultimediaViewer.php" ); // MediaViwer
	$wgMediaViewerIsInBeta = true; // Register MediaViewer as Beta
	require_once( "$IP/extensions/VectorBeta/VectorBeta.php" ); // VectorBeta
	$wgVectorBetaTypography = true;
	$wgVectorBetaVectorBetaWinter = true; // Winter design
}

if ( $wmgUseCodeEditor ) {
	require_once( "$IP/extensions/CodeEditor/CodeEditor.php" );
	$wgScribuntoUseCodeEditor = true;
}

if ( $wmgUseCollectionPDF ) {
	require_once( "$IP/extensions/Collection/Collection.php" );
	require_once( "$IP/extensions/PdfBook/PdfBook.php" );
	// Rights
	$wgGroupPermissions['user']['collectionsavecommunitypage'] = true;
	$wgGroupPermissions['user']['collectionsaveuserpage'] = true;
}

if ( $wmgUseCharInsert ) {
	require_once( "$IP/extensions/CharInsert/CharInsert.php" );
}

if ( $wmgUseCirrus || $wmgUseCirrusAsAlternate ) {
	require_once( "$IP/extensions/CirrusSearch/CirrusSearch.php" );
	require_once( "$IP/extensions/Elastica/Elastica.php" );
	$wgCirrusSearchServers = array( '23.226.230.178');
}

if ( $wmgUseCirrus ) {
	$wgSearchType = 'CirrusSearch';
}

if ( $wmgUseDPLforum ) {
	require_once( "$IP/extensions/DPLforum/DPLforum.php" );
}

if ( $wmgUseEchoPack ) {
	require_once( "$IP/extensions/Echo/Echo.php" );
	require_once( "$IP/extensions/Thanks/Thanks.php" );
}

if ( $wmgUseIRCRC ) {
	$wgRCFeeds['Orain'] = array(
		'formatter' => 'IRCColourfulRCFeedFormatter',
		'uri' => 'udp://localhost:5070',
		'add_interwiki_prefix' => false,
		'omit_bots' => true,
	);
	$wgAbuseFilterNotifications = "udp";
}

if ( $wmgUseLiquidThreads ) {
	require_once( "$IP/extensions/LiquidThreads/LiquidThreads.php" );
}

if ( $wmgUseOrainFooter ) {
	$wgFooterIcons['poweredby']['orain'] = array(
		'src' => "//$wmgUploadHostname/meta.orain.org/images/archive/9/96/20131129195014!Powered_By_Orain.png",
		'url' => '//meta.orain.org/',
		'alt' => 'Hosted by Orain',
	);
}

if ( $wmgUseMath ) {
	require_once( "$IP/extensions/Math/Math.php" );
	$wgMathDisableTexFilter = true; // This is as we didn't Compile texvccheck - addshore
	// Use MathJax? addshore
	$wgUseMathJax = true;
	$wgDefaultUserOptions['mathJax'] = true;
	// Image stuff per Jasper Deng -- John
	$wgMathPath = $wgUploadPath;
	$wgMathDirectory = $wgUploadDirectory;
	$wgUseLaTeXML = true;
}

if ( $wmgUseMobileFrontend ) {
	require_once( "$IP/extensions/MobileFrontend/MobileFrontend.php" );
}

if ( $wmgUseQuiz ) {
	require_once( "$IP/extensions/Quiz/Quiz.php" );
}

if ( $wmgUseReplaceText ) {
	require_once( "$IP/extensions/ReplaceText/ReplaceText.php" );
}

if ( $wmgUseTabber ) {
	require_once( "$IP/extensions/Tabber/Tabber.php" );
}

if ( $wmgUseTorBlock ) {
	require_once( "$IP/extensions/TorBlock/TorBlock.php" );
	$wgTorLoadNodes = false;
}

if ( $wmgUseTranslate ) {
	// May be moved to global after testing
	require_once( "$IP/extensions/UniversalLanguageSelector/UniversalLanguageSelector.php" );

	require_once( "$IP/extensions/Translate/Translate.php" );
	$wgGroupPermissions['sysop']['pagetranslation'] = true;
	$wgGroupPermissions['sysop']['translate-import'] = true;
	$wgGroupPermissions['sysop']['translate-manage'] = true;
	$wgGroupPermissions['*']['translate'] = true;
	$wgGroupPermissions['user']['translate-messagereview'] = true;

	$wgGroupPermissions['translate-proofr']['translate-messagereview'] = false;
	$wgAddGroups['translate-proofr'] = false;

	// unset this unused group already
	unset( $wgGroupPermissions['translate-proofr'] );

	// Allows the translation of the sidebar - Thanks QuimGil!
	$wgTranslateCC['wiki-sidebar'] = 'addSidebarMessageGroup';
	function addSidebarMessageGroup( $id ) {
		$mg = new WikiMessageGroup( $id, 'sidebar-messages' );
		$mg->setLabel( 'Sidebar' );
		$mg->setDescription( 'Messages used in the sidebar of this wiki' );
		return $mg;
	}
}

if ( $wmgUseWikiEditor ) {
	require_once( "$IP/extensions/WikiEditor/WikiEditor.php" );
	$wgDefaultUserOptions['usebetatoolbar'] = 1;
	$wgDefaultUserOptions['usebetatoolbar-cgd'] = 1;
}