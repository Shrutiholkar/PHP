<html>
  <body>
     <form method="post" action="#">
      Enter number1:
       <input type="text" name="t1"><br>
       Enter number2:
        <input type="text" name="t2"><br>
        <input type="submit" value="Ok">

     </form>
  </body>
</html>



<?php
$a=$_POST["t1"];
$b=$_POST["t2"];
MOD($a,$b);
POWER($a,$b);
sum($a);
factorial($b);
function MOD($a,$b)
{
$c=$a%$b;
echo("<br> mod=".$c);
}
function power($a,$b)
{
$p=1;
for($i=1;$i<=5;$i++)
{
$p=$p*$a;
}
echo("<br> power=".$p);
}

function sum($n)
{
$s=0;
for($i=1;$i<=$n;$i++)
  $s=$s+$i;
echo("<br>sum of first $nnumber=".$s);
}

function factorial($n)
{
$s=1;
for($i=1;$i<=$n;$i++)
  $s=$s*$i;
echo("<br> factorial of $n numbers=".$s);
}

?>