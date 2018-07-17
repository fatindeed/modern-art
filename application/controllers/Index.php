<?php

class IndexController extends Yaf_Controller_Abstract {

	public function init() {
		$this->getView()->request = $this->getRequest();
	}

	public function indexAction() {
		$this->getView()->content = "Hello World";
	}

}

?>