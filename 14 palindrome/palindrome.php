<!DOCTYPE HTML>
<html>
<body>
<?php 
$num=1234561;
$x=0;
$n=$num;
while(floor($num))
{
$mod=$num%10;
$x=$x*10+$mod;
$num=$num/10;
}
if($n==$x)
{
echo "$n is a palindrome number";
}
else
{
echo "$n is not a palindrome number";
}
?>
</body>
</html>