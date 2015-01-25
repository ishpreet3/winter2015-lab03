<?php

class Format {
    //put your code here
    
    function upperCaseBold() {
        $CI =& get_instance();
        $content = $CI->output->get_output();
       
        $match = null;
        $wordMatch = null;
        $mystring_orig_sentence = null;
        preg_match_all('/<p class="lead">(.*)<\/p>/eis',$content,$match, PREG_PATTERN_ORDER); 
        foreach ($match[1] as $mystring_sentence) {
            $mystring_orig_sentence = $mystring_sentence;
            preg_match_all('/\s[A-Z][a-zA-Z]*|^[A-Z][a-zA-Z]*/', $mystring_sentence, $wordMatch, PREG_PATTERN_ORDER);
            foreach($wordMatch[0] as $mystring_word){
                $mystring_sentence = str_replace($mystring_word, '<b>'.$mystring_word.'</b>', $mystring_sentence);                
            }
            $content = str_replace($mystring_orig_sentence, $mystring_sentence, $content);
        }
        $CI->output->set_output($content);
        $CI->output->_display();
    }  
}
