<?php
function shuffleClass($array, $pos){
    //Handling edge cases
    if(is_array($array) && is_int($pos)){
        //Still Handling edge cases
    if($pos == 0||count($array)  == 0){
        return $array;
    }
    elseif($pos > 0){      
        if($pos <= count($array)){ 
            $str = abs(count($array) - $pos);
        }elseif($pos > count($array)){
            $str1 = $pos % count($array);
            $str = abs(count($array) - $str1);
        } $i = 0;
        while($i < $str){
            $array[] = $array[0];
            array_shift($array);
            $i += 1; 
        }
        return $array;
    }
    else{ //if $pos < 0;
        $j = 0;
        $abs_pos = abs($pos);
        while($j < $abs_pos){
            $array[] = $array[0];
            array_shift($array);
            $j += 1;
        }
        return $array;
    }
    } else{
        return $array;
    }
}
?>
print_r(shuffleClass(array(8,5,3,7), 2)); //returns (3,7,8,5)
print_r(shuffleClass(array(4,1,3), -1)); //returns (1,3,4) 
print_r(shuffleClass(array(4,1,3), 7)); //returns (3,4,1)
print_r(shuffleClass(array(7,8,1,3), -9)); //returns (8,1,3,7)