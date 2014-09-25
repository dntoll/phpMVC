<?php

namespace controller;

require_once("URLView.php");

class MainController {
	public function __construct() {
		$this->view = new \view\URLView();

		
		setcookie("theCookies");

		echo "<h2>fhnweoihtfi</h3>";
	}

}


new MainController();