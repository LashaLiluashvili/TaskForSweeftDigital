
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <form action="Fibanacci.php" method="POST">
    <input type="text" placeholder="Enter Number" name= "number"> <br>
    <input type="submit" name="submit">

      </form>
      
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php

if (isset($_POST['submit'])) {
    $number=$_POST['number'];

    function Fibanacci($number)
    {
        if ($number==0) {
            throw new Exception("The Number Can Not be 0");
        }else
        {
            $number1=0;
            $number2=1;
            $ListOfNumbers=array();
            array_unshift($ListOfNumbers, $number2);
            array_unshift($ListOfNumbers, $number1);
        
                for ($i=2; $i <= $number ; $i++) 
                { 
                    $number3=$number1+$number2;
                    $ListOfNumbers[$i]=$number3;
                    $number1=$number2;
                    $number2=$number3;
                }

        print_r($ListOfNumbers); 
        } 
    }

}else{
    echo "Enter the Number";
}

try 
{
    Fibanacci($number);
}
catch(Exception $exception)
{
    echo 'Message: ' .$exception->getMessage(); 
    echo '<br />';
    echo 'Message: ' .$exception->getLine(); 
}

?>
