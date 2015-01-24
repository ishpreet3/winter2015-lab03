<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of bingo
 *
 * @author Administrator
 */
class Bingo extends Application{
    
    //loads the fifth record from quotes.php
    function index() {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->get(5);
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];
        $this->data['mug'] = $source['mug'];
        $this->render();
     }
        //loads the 6th record from quotes.php
     function wisdom() {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->get(6);
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];
        $this->data['mug'] = $source['mug'];
        $this->render();
     }
}
