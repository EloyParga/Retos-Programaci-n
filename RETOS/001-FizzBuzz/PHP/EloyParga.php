<?php
    // Reto 001 - Fizz Buzz
    for ($i=1; $i <=100 ; $i++) {
        if($i%3===0 && $i%5==0){
            echo "FiizBuzz<br>";
        }elseif ($i%3===0) {
            echo "Fiiz<br>";
        }else if ($i%5==0) {
            echo "Buzz<br>";
        }else{
            echo "$i<br>";
        }
    }
?>
