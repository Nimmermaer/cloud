<?php
namespace Framework\Classes\View;

class StandardView {

    public function render($side){
        $filename ='Ressources\Private\Template\\'. $side .'.html';
        $content = file_get_contents($filename);
    
        return $content;
    }
} 