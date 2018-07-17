<?php

class Bootstrap extends Yaf_Bootstrap_Abstract {
	public function _initConfig(Yaf_Dispatcher $dispatcher) {
		$config = Yaf_Application::app()->getConfig();
		if($config->constants) {
			foreach($config->constants as $name => $value) {
				define($name, $value);
			}
		}
	}
}

?>