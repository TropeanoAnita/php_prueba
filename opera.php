<html>
<body>

Resultado <br>
<?php

$n1= $_POST["num1"];
$n2= $_POST["num2"];

$operacion= $_POST["op"];

if ($operacion== "Sumar")
{
$suma = $n1+$n2;


echo "La suma es ", $suma ,"<br>";
if ($suma > 1000)
{
	

echo "\n Superaste los mil" ; 
}
}
else
{

$x=1;
while ($x < 11)
{
  echo "<br>=", $n1*$x;
  $x++;
}
}
?>

</body>
</html>
