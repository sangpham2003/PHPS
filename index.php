<?php
    for( $x = 0; $x <= 100; $x++){
            if( $x % 3 == 0 ){
                 echo  " $x : Fizz <br>";
            }
            else if($x % 5 == 0)
            {
                echo  " $x : Buzz <br>";
            }
            if($x % 3 == 0 && $x % 5 == 0){
                echo   " $x : FizzBuzz <br> ";
            }
    }
?>