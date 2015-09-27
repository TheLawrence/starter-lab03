<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * This controller is used to display the last object in the Quotes model. It is 
 * called Welcome.php because the default controller name in the routes.php file
 * is 'welcome'.
 *
 * @author Lawrence
 */
class Welcome extends Application {
    
    /*
     * This method displays the last Quotes object's data in the justone view
     * using the Quotes model's last method.
     */
    function index() 
    {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->last();
        $this->data = array_merge($this->data, $source);
        $this->render();
    }
    
}
