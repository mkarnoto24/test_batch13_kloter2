<?php

$huruf=[['a','e','c','b','d'],['j','h','i'],['l','k'],['v','y','x','z']];
$jml=count($huruf);
sort($huruf);
echo "<br>[";
for($x=0;$x<=$jml-1;$x++)
{
   echo "[";
    for($y=0;$y<=count($huruf[$x])-1;$y++)
    {  
    
        //echo sort($huruf);
        sort($huruf[$x]);
        if($y<count($huruf[$x])-1)
        {
            echo $huruf[$x][$y].",";
        }
        else
        {
            echo $huruf[$x][$y];
        }
    }
   if($x<$jml-1)
   {
        echo "],";
        
   }
   else{
       echo "]";
   }
}  
echo "<br>]";

?>
