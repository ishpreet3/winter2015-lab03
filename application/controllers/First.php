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
     function index() {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->first();
        $who = $source['who'];
        $what = $source['what'];
        $mug = $source['mug'];
        $this->data['who'] = $who;
        $this->data['what'] = $what;
        $this->data['mug'] = $mug;
        $this->render();
     }
     
     function zzz() {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->first();
        $who = $source['who'];
        $what = $source['what'];
        $mug = $source['mug'];
        $this->data['who'] = $who;
        $this->data['what'] = $what;
        $this->data['mug'] = $mug;
        $this->render(); 
     }
     
     function gimme($id) {
        $this->data['pagebody'] = 'justone';
        $source = $this->quotes->get($id);
        $who = $source['who'];
        $what = $source['what'];
        $mug = $source['mug'];
        $this->data['who'] = $who;
        $this->data['what'] = $what;
        $this->data['mug'] = $mug;
        $this->render(); 
     }

}
