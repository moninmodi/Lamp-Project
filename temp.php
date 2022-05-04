<?php 
$fname='feedback.txt';
$myfile = fopen($fname,"r") or die("Unable to open");

for($i=0; $i<2; $i++){
$cnt = 0;
echo('<div class="col-lg-6">');
echo('<ul class="features-items">');
while($cnt < 2)
{
$str = fgets($myfile);
$arr = explode("-",$str);
$cnt=$cnt+1;
echo('<li class="feature-item">
<div class="left-icon">
<img src="assets/images/features-first-icon.png" alt="First One">
</div>
<div class="right-content">
<h4>'.$arr[0].'</h4>
<p><em>'.$arr[1].'</em></p>
</div>
</li>');
}                                                
echo('</ul>');
echo('</div>');
}
fclose($fname);
?>