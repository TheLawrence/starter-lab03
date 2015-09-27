<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * This controller is used to display the Quotes objects with the id of 5 and 6.
 * This is done using the routes.php file.
 *
 * @author Lawrence
 */
class Bingo extends Application {
    
    /*
     * This is the method of the Bingo controller which displays the 
     * Quotes object's data with the id of 5 in the justone view.
     */
    function index() {
        $this->data['pagebody'] = 'justone';
        
        $source = $this->quotes->get(5);
        
        $this->data = array_merge($this->data, $source);
        
        $this->render();
    }
    
    /*
     * This is the method of the Bingo controller which displays the 
     * Quotes object's data with the id of 6 in the justone view.
     */
    function wisdom() {
        $this->data['pagebody'] = 'justone';
        
        $source = $this->quotes->get(6);
        
        $this->data = array_merge($this->data, $source);
        
        $this->render();
    }
    
}
