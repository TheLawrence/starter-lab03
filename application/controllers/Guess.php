<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * This Controller is used to display a single Quotes object's data when the URL
 * contains the word 'dunno'. This is done using the routes.php.
 *
 * @author Lawrence
 */
class Guess extends Application {
    
    /*
     * This is the default method of the Guess controller. It displays the justone view
     * populated with the Quotes object with the id of 4.
     */
    function index() {
        $this->data['pagebody'] = 'justone';
        
        $source = $this->quotes->get(4);
        
        $this->data = array_merge($this->data, $source);
        
        $this->render();
    }
    
}
