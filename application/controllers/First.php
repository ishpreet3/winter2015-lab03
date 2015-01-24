<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of first
 *
 * @author Administrator
 */
class First extends Application{
    //put your code here
    ////loads the 1st record from quotes.php
     function index() {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->first();
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];
        $this->data['mug'] = $source['mug'];
        $this->render();
     }
     //loads the 1st record from quotes.php
     function zzz() {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->first();
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];
        $this->data['mug'] = $source['mug'];
        $this->render(); 
     }
     
     //loads the specified record from the Quotes.php
     function gimme($id) {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->get($id);
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];
        $this->data['mug'] = $source['mug'];
        $this->render(); 
     }

}
