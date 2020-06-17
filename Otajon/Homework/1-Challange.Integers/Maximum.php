<?php
$a=$_GET['number1']??'-12';
$b=$_GET['number2']??'5';
$c=$_GET['number3']??'30';
function GetMiddle($num1,$num2,$num3)
{
    if($num1!=Max($num1,$num2,$num3) && $num1!=Min($num1,$num2,$num3))
    {
 echo "Midddle number is:  $num1";
    }
    else if($num2!=Max($num1,$num2,$num3) && $num2!=Min($num1,$num2,$num3))
    {
        echo "Midddle number is:  $num2";
    }
    else if($num3!=Max($num1,$num2,$num3)&& $num3!=Min($num1,$num2,$num3))
    {
        echo "Midddle number is:  $num3";
    }
    else{
        echo "You have more than 2 integers which are same.";
    }
}
?>