<?php

namespace App\Models;

class HomeModel {
	
	public function main($data,$model,$options=false){
		
		$data = $this->index($data, $models, $options);
		
		return $data;
	}
	
	public function index($data,$models,$options){
		
		if(isset($data['directive']) && $data['directive'] === 'index'){
			
			$data = $this->set($data, 'title', 'main');
			
			$list = array(
				'foo'=>'bar',
				'cat'=>'meow',
				'dog'=>'bark'
			);
			
			$data = $this->set($data, 'list', $list);
			
		}
		
		return $data;
		
	}
	
	public function set($data,$key,$val){
		
		$data[$key] = $val;
		
		return $data;
		
	}
	
}

?>