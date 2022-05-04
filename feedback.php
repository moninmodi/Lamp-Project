<?php

$myfile = fopen("feedback.txt", "a") or die("Unable to open file!");
$n = $_POST['name'];
$mess= $_POST['message'];
$txt = $n."-".$mess."\n";
fwrite($myfile,$txt);
fclose($myfile);

echo '<script type="text/javascript">';
echo 'alert("Feedback submitted successfully");';
echo 'window.location.href="contact.html";';
echo '</script>';

?>
