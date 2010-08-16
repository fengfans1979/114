<?php
$prefix = $_GET["prefix"];
$result = file_get_contents("http://lieche.huoche.com/do.php?action=station&prefix=".$prefix,"r");
echo $result;
?>