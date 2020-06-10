<?php
$full_name = $_POST['full_name']??null;
$msg = "Thank you for your donation.";
header("Location:Fotima.php?msg=".$msg);
die;
