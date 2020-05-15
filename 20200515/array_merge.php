<?php

    //做一個類似array_merge()的功能

    merge("a","b","c","fork",52,"dock");

    function merge($a,...$b){
        $tmp = [];
        $tmp[] = $a;
        if(is_array($b)){
            foreach($b as $value){
                $tmp[] = $value;
            }
        }
        print_r($tmp);
    }
?>