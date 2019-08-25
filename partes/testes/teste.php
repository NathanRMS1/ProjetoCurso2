<?php 
$c = "fndjkas mdfkm pfdop pppp ---------------- ooooooooooooo

cc ";
$br= "<br>";
$a = preg_replace('/[\r\n]{1,}/','<br>',$c);
echo $c;
echo $br;
echo $a;
?>