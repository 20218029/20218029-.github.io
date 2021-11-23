<!DOCTYPE html>
<html>
<body>
   
<h4>homework3-3 : Fibonacci</h4>
<p>Receive an integer number n less than 100 and output the proportions of n Fibonacci seqences and the front and rear terms</p>

<?php
$n=10;
$a=1;
$b=1;
echo "$a <br>";
echo "$b <br>";
for($x=0; $x <= $n; $x++) {
   $c=$a+$b;
   $b=$a;
   $a=$c;
  echo "$c <br>";
}
?>
</body>
</html>
