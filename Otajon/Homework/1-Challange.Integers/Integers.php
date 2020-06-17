<?php
$a=$_GET['number1']??null;
$b=$_GET['number2']??null;
$c=$_GET['number3']??null;
<<<<<<< HEAD
$a=$_GET['number1']??'-23';
$b=$_GET['number2']??'43';
$c=$_GET['number3']??'23';
=======
>>>>>>> 21fb299e3946a84124de2b4c9f8ae3e37f03c438
function getMax($num1, $num2, $num3)
{
   if($num1>$num2)
   {
      if($num1>$num3){
          echo" Maximum number is $num1";
      }
      else if ($num1<$num3){
          echo "Maximum number is $num3";
      }
      else if($num1=$num3){
          echo "Maximum number is $num1";
      }
   }
   else  if($num1<$num2)
   {
       if($num1>$num3){
           echo" Maximum number is $num2";
       }
       elseif ($num1<$num3 && $num2<$num3){
           echo "Maximum number is $num3";
       }
       else{
           echo "Maximum number is $num2";
       }
   }
   else if($num1=$num2 ){
       if($num2>$num3) {
           echo " Maximum number is $num2";
       }
       elseif($num2<$num3)
       {
           echo "Maximum number is $num3";
       }
       else{
           echo" All numbers are equil";
       }
   }
}
function getMin($num1,$num2,$num3)
{
    if($num1>$num2)
    {
        if($num2>$num3)
        {
            echo "Minimum number is $num3";
        }
        else if ($num2<$num3){
            echo "Minimum number is $num2";
        }
        else{
            echo "Minimum number is $num2";
        }
    }
    else if($num1<$num2)
    {
        if($num1<$num3)
        {
            echo"Minimum number is $num1";
        }
        elseif($num1>$num3){
            echo"Minimum number is $num3";
        }
        else{
            echo"Minimum number is $num1";
        }
    }
    else if($num1=$num2){
        if($num1>$num3)
        {
            echo"Minimum number is $num3";
        }
        else if($num1<$num3)
        {
            echo"Minimum number is $num1";
        }
        else{
            echo "All numbers are equil";
        }
    }
}
function getMiddle($num1,$num2,$num3)
{
    if($num1>$num2)
    {
        if($num1>$num3 && $num2<$num3)
        {
            echo" Middle number is $num2";
        }
        else if ($num1>$num3 && $num2>$num3 )
        {
            echo "Middle number is $num2";
        }
        else if( $num1<$num3){
            echo "Middle number is $num1";
        }
        else if ($num1=$num3){
            echo "We have two same number $num3 and smallar number is $num2";
        }
        else if($num2=$num3)
        {
            echo "We have two same number $num2 and bigger number is $num1";
        }
    }
    else if($num1<$num2)
    {
        if ($num1<$num3 && $num2<$num3)
        {
            echo "Middle number is $num2";
        }
        else if($num1<$num3 && $num2>$num3)
        {
            echo "Middle number is $num3";
        }
        else if($num1>$num3)
        {
            echo"Middle number is $num1";
        }
        else if($num1=$num3)
        {
            echo "We have two same number $num1 and bigger number is $num2";
        }
    }
    else if($num1=$num2 && $num1>$num3){
        echo "We have two same numbers and one Minimum number $num3";
    }
    else if($num1=$num2 && $num1<$num3){
        echo "We have two same numbers and one Maximum number $num3";
    }
    else{
        echo "All numbers are same";
    }
}
?>