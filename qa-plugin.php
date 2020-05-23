<?php
/*
	Plugin Name: Some Plugin
	Plugin URI: https://github.com/JacksiroKe/q2a-some-plugin
	Plugin Description: Just some plugin template for q2a
	Plugin Version: 0.1
	Plugin Date: 2020-05-20
	Plugin Author: JacksiroKe
	Plugin Author URI: https://github.com/JacksiroKe
	Plugin License: GPLv3
	Plugin Minimum Question2Answer Version: 1.6

*/

if ( !defined('QA_VERSION') )
{
	header('Location: ../../');
	exit;
	
}
	
qa_register_plugin_module('widget', 'some-plugin.php', 'some_plugin', 'Plugin Template');

/*
	Omit PHP closing tag to help avoid accidental output
*/
