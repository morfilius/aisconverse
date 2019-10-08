<?php

/**
 * @package Hello world
 */
/*
Plugin Name: Hello-world
Plugin URI: https://www.fl.ru/users/morfilius/
Description:  test plugin
Version: 4.1.2
Author: Morfilius
Author URI: https://www.fl.ru/users/morfilius/
*/
require_once( __DIR__.'/classes/Colors.php');
require_once( __DIR__.'/classes/Hours.php');
require_once( __DIR__.'/classes/Main.php');
require_once( __DIR__.'/classes/View.php');
require_once( __DIR__.'/options.php');

$view_path =  __DIR__.'/views/view.php';

$hw = new Main( new Colors('#CD5C5C', '#00FF00', '#008B8B', '#FF4500' ), new Hours(), new View(), get_option('hl_setting_name') );

$hw->init();