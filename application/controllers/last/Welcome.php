<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of last
 *
 * @author Administrator
 */
class Welcome extends Application{
    //put your code here
    
     function index() {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->last();
        $this->data['who'] = $source['who'];
        $this->data['what'] = $source['what'];
        $this->data['mug'] = $source['mug'];
        $this->render();
     }
     
     
     
}
