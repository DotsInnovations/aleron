<?php
/*
Plugin Nmae: My Custom Widget
Description : These widget is use for the theme customizations
version: 1.0
Author: Himanshu Soni

*/
Class mycustom_widget extends WP_Widget {
	function __construct(){
  		parent::__construct(false,$name=__('My Custom Post'));
	}
	function form(){

	}
	function update(){

	}
	function widget($args,$instance){

	}
}

?>