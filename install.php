<?php
if(file_exists(dirname(__FILE__) . '/SSI.php') && !defined('SMF'))
	require_once(dirname(__FILE__) . '/SSI.php');
else if(!defined('SMF'))
	die('<b>Error:</b> Cannot install - please verify you put this in the same place as SMF\'s index.php and SSI.php files.');

if((SMF == 'SSI') && !$user_info['is_admin'])
	die('Admin priveleges required.');

db_extend('packages');

// Add your mod setting to the database
$smcFunc['db_insert']('replace',
	'{db_prefix}settings',
	array('variable' => 'string', 'value' => 'string'),
	array(
		array('kumnaa_nested_quotes', '5')
	),
	array('variable')
);

if(SMF == 'SSI')
	echo 'Database changes are complete!';
?>