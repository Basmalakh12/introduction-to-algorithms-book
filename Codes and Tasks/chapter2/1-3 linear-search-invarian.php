<?php
function linear_search($arr ,$x){
    for ($i=0;$i<count($arr);$i++){
        if($arr[$i]==$x) return$i;
    }
    return-1;
    
 }
 $arr = array(4, 2, 5, 6, 14, 7, 15, 3);
 echo linear_search($arr, 15);
