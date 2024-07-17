<html>
<body>
<form method="post" action="#">
enter number:
<input type="text" name="t1"><br>

</form>
</body>
</html>

<?php
$n=$_POST["t1"];
if($n%2==0)
  echo("Number is even");
else
  echo("Number is odd");
?>