<?php

//Katleens Beer Song exercise

$numOfBeer = 99;

function sing($numOfBeer){
    for ($i = $numOfBeer; $i >= 0; $i-- ){
   
        if($i > 0){
        echo $i." bottles of beer on the wall. ".$i." bottles of beer."." Take one down and pass it around, <br>";
        } else {
            echo " No more bottles of beer on the wall, No more bottles of beer. go to the store and buy some more, <br> 99 bottles of beer on the wall.";
        }
    };
};


sing($numOfBeer);


