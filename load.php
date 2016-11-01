<?php
echo "Generando carga";

for($i = 0; $i < 1000000000; $i++) {
     $a += $i;
	 $s+=($a*$a)/$i;
	 }

?>