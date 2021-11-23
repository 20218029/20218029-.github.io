<!DOCTYPE html>
<html>
<body>
   
<h4>homework3-2 : Sorting</h4>
<p>Receive n integer nu,bers from 10 to 100, generate n integer random numbers ,and output the generated results and sorted results in ascending order.</p>

<?php
$n=16;
echo "random number :";
echo(rand(10,100));
echo"<br>";
$numbers=array(4,6,2,22,11);
$arrlength=count($numbers);
for($x=0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
}
?>
<br>
<p>sorting result</p>
<?php
sort($numbers);
$arrlength=count($numbers);

for($x=0; $x<$arrlength;$x++) {
  echo $numbers[$x];
  echo "<br>";
}
?>


</body>
</html>
