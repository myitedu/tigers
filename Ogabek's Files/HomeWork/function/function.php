<?php
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
		return "This is Max Number: &nbsp&nbsp".$max. "<hr>This is Min Number : &nbsp &nbsp ".$min."<hr>"."This is Normal Number: &nbsp &nbsp". $max /2;
}
echo getMax (range (1,57));

?>