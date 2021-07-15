<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <form action="int.php" method="POST">
    <input type="text" placeholder="Enter Number" name= "number"> <br>
    <input type="submit" name="submit">

      </form>
      
    <title>Document</title>
</head>
<body>
    
</body>
</html>

<?php
if (isset($_POST['submit'])) 
{
    $number=$_POST['number'];

    function Reversed($number)
    {
        // $lengthOfNumber = strlen($number);
        // Way 1.
        $reversedNumber=str_split($number);
        // Way 2.
        // for ($i=0; $i < $lengthOfNumber; $i++) 
        // { 
        //     $reversedNumber[$i]=$number[$i];
        // }
        $str=implode((array_reverse($reversedNumber)));
        echo $str;
    }

    Reversed($number);
}
?>
