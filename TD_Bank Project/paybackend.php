<?php
$first_name = $_POST['first_name']??null;
$msg = "Thank you for paying tha bill and for next month scheduled for Jun 7.";
header("Location: final.php?msg=".$msg);
die;
