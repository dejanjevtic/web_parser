<?php


class Autoload {
    private $path;  
    private $controller;
    function __construct($url,$prs,$itm) {
           
        $this->path = explode('/', rtrim($url, '/'));
       
        
        if(empty($this->path[0])){
            
            require 'controllers/index.php';
            $this->controller=new Index();
            $this->controller->index();
            return false;
        }
             
        $file='controllers/' . $this->path[0] . '.php';
        if (file_exists($file)){
            require $file;
                if(isset($prs)) $this->controller = new $this->path[0]($prs,$itm);
                else $this->controller = new $this->path[0](); 
                $this->controller->index();
                if (isset($this->path[1])) {
                    if (!method_exists($this->controller, $this->path[1])) {
                        $this->error();
                    }
                    else {
                        $this->controller->{$this->path[1]}();
                    }
                 
            }
                     
        }
        
        else {
            require 'controllers/error.php';
           
            $this->controller=new Error();
            
            return false;
        
        }
        
    }
    function error() {
		echo "<br>Function doesn't exist";
	}
    
}