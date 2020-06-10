<?php
$parms = $_POST;
echo "First Name:" .$parms['name']??'Ogabek';
echo "<hr>";
echo "Your Message:" .$parms['message']??'Hi Ogabek';



?>