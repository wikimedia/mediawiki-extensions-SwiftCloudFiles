<?php

$wgExtensionCredits['other'][] = array(
	'path'           => __FILE__,
	'name'           => 'SwiftCloudFiles',
	'url'            => 'https://www.mediawiki.org/wiki/Extension:SwiftCloudFiles',
	'version'        => '1.7.10-wmf', // from php-cloudfiles
	'author'         => 'Aaron Schulz',
	'descriptionmsg' => 'swiftcloudfiles-desc',
);

$wgAutoloadClasses['CF_Constants'] =
	$wgAutoloadClasses['CF_Authentication'] =
	$wgAutoloadClasses['CF_Connection'] =
	$wgAutoloadClasses['CF_Container'] =
	$wgAutoloadClasses['CF_Object'] = dirname( __FILE__ ) . '/php-cloudfiles-wmf/cloudfiles.php';

$wgExtensionMessagesFiles['SwiftCloudFiles'] = dirname( __FILE__ ) . '/SwiftCloudFiles.i18n.php';
