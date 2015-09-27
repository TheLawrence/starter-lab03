<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of First
 *
 * @author Lawrence
 */
class First extends Application {
    
    /*
     * This method of the First controller displays the first Quotes object's 
     * data using the justone view and the Quotes model's first method.
     */
    function index() {
        $this->data['pagebody'] = 'justone';
        
        $source = $this->quotes->first();
        
        $this->data = array_merge($this->data, $source);
        
        $this->render();
    }
    
    /*
     * This is the method of the First controller which displays the 
     * data of the Quotes object using the first method of the Quotes model.
     */
    function zzz() {
        $this->data['pagebody'] = 'justone';
        
        $source = $this->quotes->first();
        
        $this->data = array_merge($this->data, $source);
        
        $this->render();
    }
    
    /*
     * This method uses the parameter $test which holds the id of a Quotes object.
     * The retrieved object's data is displayed in the justone view.
     */
    function gimme($test) {
        $this->data['pagebody'] = 'justone';
        
        $source = $this->quotes->get($test);
        
        $this->data = array_merge($this->data, $source);
        
        $this->render();
    }
    
}
