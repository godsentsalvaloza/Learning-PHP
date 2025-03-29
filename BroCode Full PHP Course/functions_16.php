<?php

    function hyp($a, $b) {
        return sqrt(($a ** 2) + ($b ** 2));
    }

    function happy_birtyday($x, $y) {
        echo "happy birthday {$x}! <br/>";
        echo "happy birthday dear {$x}! <br/>";
        echo "you are {$y} years old <br/> <br/>";
    }

    function isEven($x){
        $isEven = $x % 2 == 0 ?  $isEven =  "{$x} is even" : $isEven =  "{$x} is not even";
        return $isEven;
    }

    happy_birtyday("Spongebob", 12);
    happy_birtyday("Squidward", 18);

   echo isEven(100);
   echo "<br/>";
   echo hyp(3,4);
?>