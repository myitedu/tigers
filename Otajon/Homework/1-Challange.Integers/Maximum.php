
<?php
$a=$_GET['number1']??'-12';
$b=$_GET['number2']??'5';
$c=$_GET['number3']??'30';
function GetMax($num1,$num2,$num3)
{
return max($num1,$num2,$num3);
}

function GetMin($num1, $num2, $num3)
{
    return min($num1,$num2,$num3);
}
function GetMiddle($num1,$num2,$num3)
{
    if($num1!=GetMax($num1,$num2,$num3) && $num1!=GetMin($num1,$num2,$num3))
    {
 echo "Midddle number is:  $num1";
    }
    else if($num2!=GetMax($num1,$num2,$num3) && $num2!=GetMin($num1,$num2,$num3))
    {
        echo "Midddle number is:  $num2";
    }
    else if($num3!=GetMax($num1,$num2,$num3)&& $num3!=GetMin($num1,$num2,$num3))
    {
        echo "Midddle number is:  $num3";
    }
    else{
        echo "You have more than 2 integers are same.";
    }
}

?>