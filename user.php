<html>
<body>
<form method="get" action="#">
Enter user Name:
<input type="text" name="t1"><br>
Enter Password:
<input type="password" name="t2"><br>
<input type="submit" value="Login">
<input type="reset" value="Clear">
</form>
</body>
</html>

<?php
$u=$_GET["t1"];
$p=$_GET["t2"];
  if($u=="rbnb" && $p=="bcs")
     echo("Login succ...");
  else
     echo("Invalid user or pass...");

?>