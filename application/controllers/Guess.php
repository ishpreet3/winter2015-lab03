<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of guess
 *
 * @author Administrator
 */
class Guess extends Application {
    
    //loads the 4th record from quotes.php
    function index() {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->get(4);
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];
        $this->data['mug'] = $source['mug'];
        $this->render();
     }
}
