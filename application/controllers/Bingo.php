<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bingo
 *
 * @author Lawrence
 */
class Bingo extends Application {
    
    function index() {
        $this->data['pagebody'] = 'justone';
        
        $source = $this->quotes->get(5);
        
        $this->data = array_merge($this->data, $source);
        
        $this->render();
    }
    
}
