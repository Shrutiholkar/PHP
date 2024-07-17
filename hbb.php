<html>
<body>
 <form method="post" action="#">
 Select Hobbies;<br>
 <input type="checkbox" name="c1" value="Dancing" >Dancing <br>
 <input type="checkbox" name="c2" value="Reading">Reading <br>
 <input type="checkbox" name="c3" value="Coding">Coding <br>
 <input type="submit">
</form>
</body>
</html>


<?php
$h1=$_POST["c1"];
$h2=$_POST["c2"];
$h3=$_POST["c3"];
printf("selected Hobbies=%s%s%s".$h1,$h2,$h3);


?>