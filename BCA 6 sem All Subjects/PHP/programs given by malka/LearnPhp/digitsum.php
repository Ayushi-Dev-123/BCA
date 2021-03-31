<!DOCTYPE html>
<html>
<head>
	<title>Sum of digits</title>
</head>
<body>
<font size="10">
<?php
$num=12345;
$sum=0;
$rem=0;
for ($i=0; $i<=strlen($num); $i++) 
{ 
	$rem= $num %10;
	$sum=$sum+$rem;
	$num=$num/10;
}
echo "the sum of digit is" .$sum;
?>
</font>
</body>
</html>
