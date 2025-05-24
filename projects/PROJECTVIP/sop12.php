<?php>
$a=array(60,78,74,85,96);
$t=0;
foreach($a as $value)
{
echo "<br> Marks in subject”.$value;
$t=$t+$value;
}
$p=$t*100/500;
echo <br>"Total is :”.$t;
echo<br> “Percentage is :”.$p;
?>
