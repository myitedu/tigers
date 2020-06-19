<?php

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
		} else if(($b > $a) && ($b > $c)){
				$max = $b;
				
				if ($a > $c) {
						$mid = $a;
						$min = $c;
				} else {
						$mid = $c;
						$min = $a;
				}
		} else if(($c > $a) && ($c > $b)){
				$max = $c;
				if ($a > $b){
						$mid = $a;
						$min = $b;
				}else{
						$mid = $b;
						$min = $a;
				}
		}else if(($a = $b) && ($b = $c)){
				echo "All numbers are equal";
		}
		return "This is Minimum Number:&nbsp". $min."<hr>This is Middle Number:&nbsp"
				. $mid."<hr>This is Maximum Number:&nbsp". $max;
}
echo getValue (688,6,68);

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

?>