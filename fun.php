<?php
function add()
{
echo("<br> Number of argument:".func_num_args());
echo("<br> all values");
$a=func_get_args();
print_r($a);
$s=0;
for($i=0;$i<func_num_args();$i++)
  $s=$s+func_get_arg($i);
echo("<br> Addition=".$s);
}

add(11,22);
add(11.22,33.44,55);
add(100.3,200.11,300.44);
?>