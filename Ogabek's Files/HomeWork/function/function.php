<?php

/*
function getMax($array){
		$n = count($array);
		$m = count($array);
		$max = $array[0];
		$min = $array[0];
		for ($i = 1; $i < $n; $i++)
				if ($max < $array[$i])
						$max = $array[$i];
		for ($i = 1; $i > $m; $i++)
				if ($min > $array[$i])
						$min = $array[$i];
		return "This is Max Number: &nbsp&nbsp".$max. "<hr>This is Min Number : &nbsp &nbsp
               ".$min."<hr>"."This is Normal Number: &nbsp &nbsp". $max /2;
}
echo getMax (range (1,57));
*/

function getValue($a, $b, $c){
		
		if (($a > $b) && ($a > $c)) {
				$max = $a;
				
				if ($b > $c) {
						$mid = $b;
						$min = $c;
				} else {
						$mid = $c;
						$min = $b;
				}
		} else {
				$mid = $c;
				
				if ($b > $a) {
						$max = $b;
						$min = $a;
				} else {
						$max = $a;
						$min = $b;
				}
		}
		return "This is minNumber:". $min ."<hr>". "This is midNumber:" . $mid ."<hr>". "This is maxNumber:" . $max;
}
echo getValue (16,325,100);
?>