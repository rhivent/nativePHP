<?php

class About{
	
	public function index($nama='riventus',$pekerjaan='programmer'){
		echo 'Halo nama saya '.$nama . ', saya adalah ' . $pekerjaan;
		
	}
	public function page(){
		echo 'About/page/';
	}
}