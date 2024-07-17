<html>
<body>
<form method="post" action="#">
Enetr Day:
 <input type="text" name="t1"> <br>
 <input type="submit" value="ok"> 
</form>
</body>
</html>


<?php
$d=$_POST["t1"];
switch($d)
{
  case "monday":echo("<body bgcolor='red'>");break;
  case "tuesday":echo("<body bgcolor='pink'>");break;
  case "wednesday":echo("<body bgcolor='yellow'>");break;
  case "thursday":echo("<body bgcolor='blue'>");break;
  case "friday":echo("<body bgcolor='orange'>");break;
  case "saturday":echo("<body bgcolor='violet'>");break;


}
?>