<?php

namespace App\Core\App;

class App {
	
	protected $controller = 'home';
	
	protected $method = 'index';
	
	protected $params;
	
	public function __construct($conf){
		
		$url = explode('/',$_SERVER['REQUEST_URI']);
				
		$this->load($url,$conf);
		
		$this->home($url, $conf);
		
		$this->control($conf);
				
		unset($url[0],$url[1],$url[2]);
		
		$this->params = $url;

		call_user_func_array(array($this->controller,$this->method),$this->params);
		
	}
	
	public function control($conf){

		$controller = $conf['dir'] . '/app/core/Controller.php';
		
		require_once $controller;
		
	}
	
	public function home($url,$conf){
		
		if(empty($url[1])){
			
			$controller = $conf['dir'] . '/app/controllers/' . $this->controller . '.php';
			
			require_once $controller;
			
			$this->controller = 'App\\Controllers\\' . $this->controller;
			
			$this->controller = new $this->controller;			
		}	
		
	}
	
	public function load($url,$conf){
		
		if(isset($url[1]) && !empty($url[1])){
			
			$controller = $conf['dir'] . '/app/controllers/' . $url[1] . '.php';
			
			if(file_exists($controller)){
				
				require_once $controller;
				
				$this->controller = 'App\\Controllers\\' . $url[1];
				
				$this->controller = new $this->controller;
				
				if(!empty($url[2])){

					$this->method = $url[2];

				}
							
			}
		
			
		}		
	}
	
}

?>

