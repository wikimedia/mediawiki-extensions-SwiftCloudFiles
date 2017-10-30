<?php

$wgExtensionCredits['other'][] = array(
	'path'           => __FILE__,
	'name'           => 'SwiftCloudFiles',
	'url'            => 'https://www.mediawiki.org/wiki/Extension:SwiftCloudFiles',
	'version'        => '1.7.11-wmf', // from php-cloudfiles
	'author'         => 'Aaron Schulz',
	'descriptionmsg' => 'swiftcloudfiles-desc',
);

$wgAutoloadClasses['CF_Constants'] =
	$wgAutoloadClasses['CF_Authentication'] =
	$wgAutoloadClasses['CF_Connection'] =
	$wgAutoloadClasses['CF_Container'] =
	$wgAutoloadClasses['CF_Object'] = __DIR__ . '/php-cloudfiles-wmf/cloudfiles.php';

$wgMessagesDirs['SwiftCloudFiles'] = __DIR__ . '/i18n';
