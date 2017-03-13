<?php
namespace System\Controllers\Front;
use System;

class Homepage extends System {
	public function index () {
		$this->template->display("index.tpl");
	}
}
?>