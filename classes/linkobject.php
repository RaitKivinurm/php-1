<?php

/**
 * Created by PhpStorm.
 * User: anna.karutina
 * Date: 18.01.2017
 * Time: 8:48
 */
// only for testing
// import http class
require_once 'http.php';
// only for testing
class linkobject extends http
{// class begin
	// class variables
	var $baseUrl = false; // base url
	var $protocol = 'http://'; // protocol for url - http
	var $delim = '&amp;'; //& html tag name1=value1&name2=value2
	var $eq = '='; // = for url element pair element_name=element_value
	// class methods
	// construct
	// create base url: http://XXX.XXX.XXX.XXX/path_to_file.php
	function __construct(){
		parent::__construct();
		$this->baseUrl = $this->protocol.HTTP_HOST.SCRIPT_NAME;
	}// construct
}// class end