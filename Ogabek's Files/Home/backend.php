<?php

$title_car = $_POST['car_name']??null;
$model_car = $_POST['model_name']??null;
$parms = strip_tags ($title_car);
$parms = strip_tags ($model_car);
$cars = [
		'Toyota'=>[
		       'Title'=>'Toyota',
		       'model'=>'Camry',
				'price'=>'$19,000',
		        'speed'=>'220 km'
]
		,'Lexus'=>[
				'Title'=>'Lexus',
				'model'=>'570',
				'price'=>'$39,000',
				'speed'=>'260 km'
		]
		,'Mercedes'=>[
				'Title'=>'Mercedes',
				'model'=>'G 63',
				'price'=>'$119,000',
				'speed'=>'320 km'
		]
		,'BMW'=>[
				'Title'=>'BMW',
				'model'=>'X7',
				'price'=>'$59,000',
				'speed'=>'320 km'
		]
];


?>

