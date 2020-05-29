<?php

    //做一個類似array_merge()的功能
    echo "<pre>";
    print_r( merge("a","b","c","fork",52,"dock",6.5,3.88,-5,'roki',true,false) );


    function merge(...$a){
        if(is_array($a)){
            foreach($a as $value){
                $tmp[] = $value;
            }
        }else{
            $tmp[] = $a;
        }
        return $tmp;
    }
?>