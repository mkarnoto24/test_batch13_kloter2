<?php

function persegi($n)
{
    if($n%2==0)
    {
        echo "Anda Harus memasukan bilangan ganjil";
    }
    else
    {
        for ($a = 1; $a <= $n; $a++) {
            
            for ($b = 1; $b <= $n; $b++) {
                //echo $a;
                if ($a % 2 == 0) {
                    if($b==1 || $b == $n)
                    {
                        echo " * ";
                    }
                    else {
                        echo "= ";
                    }
                } else {
                    echo " * ";
                }
            }
            echo "<br>";
        }
    }
    
}
persegi(5);
