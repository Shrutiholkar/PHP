<html>
<body>
 <form method="post" action="#">
  Enter Number:
  <input type="text" name="t1"><br>
  <input type="submit" value="ok">
  </form>
</body>
</html>


<?ph
$n=$_POST["t1"];
$r=0;
while((int)$n>0)
{
$d=$n%10;
$r=$r*10+$d;
$n=(int)$n%10;
}
echo("<br> reverse no".$r);



?>