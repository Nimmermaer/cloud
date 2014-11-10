<?php
namespace \Framework\Classes\Controller; 
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ActionController
 *
 * @author Cox
 */
class ActionController {
  
    
    public function __construct() {
       $this->view = "\Cloud\Resources\Private\Template\Start.html" ;
    }
    
    public function render() {
         $content = file_get_contents($this->view);
          
          return $content;
    }
}
