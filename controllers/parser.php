<?php

/* 
 * Parser
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



class Parser {
    private $address;
    private $item;
    private $num;
    private $i;
    function __construct($adr,$itm) {
        $this->address=$adr;
        $this->item=$itm;
    }
    function index() {
		
        require 'models/parser_model.php';
        $parser= new Parser_Model($this->address,$this->item);
        
        if(isset($parser->link)&&isset($parser->match))
        switch($this->item){
                    case 'title': print_r($parser->match[1][0]);
                    break;
                    case 'meta': 
                        $this->num=count($parser->match[1]);
                        
                        for($i=0;$i<$this->num;$i++){
                           echo $parser->match[1][$i];
                        echo "<br>";
                        }
                    break;
                    case 'input': 
                        $this->num=count($parser->match[1]);
                        
                        for($i=0;$i<$this->num;$i++){
                           echo $parser->match[1][$i];
                        echo "<br>";
                        }
                    break;
                    default:
                }
    }
	
    
}
