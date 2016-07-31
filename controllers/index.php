<?php

interface Interface2{

	public function index();
       

}

class Index extends Controller implements Interface2{
    
    function __construct() {
        parent::__construct();
    }
    function index() {
		
		$this->view->render('index');
	}
	
   
}