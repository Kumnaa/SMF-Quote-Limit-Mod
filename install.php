<?php
/******************************************************************************
* kumnaa.net - Quote Limit Mod                                                *
*                                                                             *
* =========================================================================== *
* Software Version:           Quote Limit Mod: 1.1.1                          *
* Software by:                kumnaa.net                                      *
* Copyright 2013 by:          kumnaa.net                                      *
*******************************************************************************
* This program is free software: you can redistribute it and/or modify        *
* it under the terms of the GNU General Public License as published by        *
* the Free Software Foundation, either version 3 of the License, or           *
* (at your option) any later version.                                         *
*                                                                             *
* This program is distributed in the hope that it will be useful,             *
* but WITHOUT ANY WARRANTY; without even the implied warranty of              *
* MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the               *
* GNU General Public License for more details.                                *
*                                                                             *
* You should have received a copy of the GNU General Public License           *
* along with this program.  If not, see <http://www.gnu.org/licenses/>.       *
******************************************************************************/
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