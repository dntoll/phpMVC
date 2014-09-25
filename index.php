<?php

namespace controller;

require_once("URLView.php");

class MainController {
	public function __construct() {
		$this->view = new \view\URLView();
	}

}


new MainController();