
<?php

$array = array(1, 0, 30, 1, 0, 9);
zeroFunction($array);

function zeroFunction($array)
{
    $FinalArray=array();

for ($i=0; $i < count($array); $i++) 
{ 
    if (str_contains($array[$i],'0'))
    {
        array_push($FinalArray,$array[$i]);
    }else
    {
        array_unshift($FinalArray,$array[$i]);
    }
    
}
    print_r($FinalArray);
}
?>
