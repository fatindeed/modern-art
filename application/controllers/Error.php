<?php

class ErrorController extends Yaf_Controller_Abstract {

	/** 
	 * you can also call to Yaf_Request_Abstract::getException to get the 
	 * un-caught exception.
	 */
	public function errorAction($exception) {
		echo nl2br($exception);
		return false;
	}

}

?>