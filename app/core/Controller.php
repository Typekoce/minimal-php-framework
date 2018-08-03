<?php

namespace App\Core\Controller;

class Controller {
	
	protected $dir;

	public function __construct() {

		$this->dir = dirname(dirname(__FILE__));

	}

	public function model($models) {
		
		foreach ($models as $key => $val) {
			
			require_once  $this->dir . '/models/' . $val . '.php';
			
			$obj = 'App\\Models\\' . $val;
			
			$models[$key] = new $obj;
			
		}
		
		return $models;

	}

	public function view($data, $path) {
		
		extract($data);

		require_once $this->dir . '/view/' . $path . '.php';

	}

}
?>
