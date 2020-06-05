<?php

$full_name = $_POST['full_name'] ?? null;
$msg = "Thank you for your donation.";
header ("Location: donation.php?msg=" . $msg);
die;
?>