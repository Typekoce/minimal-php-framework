<?php

namespace App\Controllers;

use App\Core\Controller as Con;

class Home {
	
	public function index ($id = '',$no = ''){
		
		$data = array(
			'id'=>$id,
			'directive'=>'index',
			'no'=>$no,
		);
				
		$cont = new Con\Controller();
		
		$models = array(
			'home'=>'HomeModel'
		);
		
		$models = $cont->model($models);
		
		$data = $models['home']->main($data,$models);		
				
		$cont->view($data,'home/index');
		
	}
	
}

?>