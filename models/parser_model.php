<?php


class Parser_Model {
    private $address;
    private $item;
    public $link;
    public $match;
    
    function __construct($address,$item) {
        
		$this->address=$address;
                $this->item=$item;
				
                $this->link = @file_get_contents($this->address);
                
                switch($this->item){
                    case 'title': preg_match_all("/.*?\<$this->item>(.*?)\<\/$this->item\>.*?/is",$this->link,$this->match);
                    break;
                    case 'meta':  preg_match_all("/.*?\<$this->item name=\"(.*?)\".*?\>.*?/is",$this->link,$this->match);
                    break;
                    case 'input': preg_match_all("/.*?\<$this->item.*?name=\"(.*?)\".*?\>.*?/is",$this->link,$this->match);
                    break;
                    default:
                }
                
  }      
}