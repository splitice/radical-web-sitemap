<?php
namespace Radical\Utility\Format\Sitemap;

class SitemapContainer extends SitemapBase {
	private $data;
	
	function __construct($data){
		$this->data = $data;
	}
	function toXML(){
		$ret = '<?xml version="1.0" encoding="utf-8"?>';
		$ret .= $this->data->toXML();
		return $ret;
	}
}