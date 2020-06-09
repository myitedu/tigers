<?php
$first_name = $_POST['first_name']??null;
$msg = "Thank you for transfering money with TD bank and if Receiver receive money will let You know.";
header("Location: final.php?msg=".$msg);
die;
