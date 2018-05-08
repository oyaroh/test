<?php

$corrupted_names="Chirakahula,Mukwana Joe.0500387482.UGANDA.+256| <br>
Wambua,Doe Mumbua.080023450.KENYA.+254|<br>
Vonbora,Katherina Luther.0600990033.GERMANY.+32<br>
|Boromir,Grommit Wallace.0100873901.IRELAND.+98<br>
|Piepont,Edwards Jonathan.0200983729.AMERICA.+1<br>
|Asaph,Elihu Mose.02990033.ISRAEL.+2<br>
|Otoyo,Wafula Joel.0777799920.KENYA.+254<br>
|Mapete,Mwambingu Simba.0987483292.TANZANIA.+257<br>
|SARATON,DAVID BREINARD.043899292.AMERICA.+1<br>
|POMPI,JOHN OWEN.074749292.ZAMBIA.+267<br>
|MAG,JOHN BUNYAN.09837328.UGANDA.+256<br>
|Vonstaupitz,Johann Gregory.0600984733.GERMANY.+32";


$my_array = array("joe","Mukwana","Chirakahula","+256","0500387482","UGANDA");

list($a, $b, $c, $d, $e, $f) = $my_array;
echo " $a,  $b,  $c, $d, $e, $f.<br>";
$my_array = array("Doe","Mumbua","Wambua","+254","080023450","KENYA");

list($a, $b, $c, $d, $e, $f) = $my_array;
echo " $a,  $b,  $c, $d, $e, $f.<br>";
$my_array = array("Katherina","Luther","Vonbora","+32","0600990033","GERMANY");

list($a, $b, $c, $d, $e, $f) = $my_array;
echo " $a,  $b,  $c, $d, $e, $f.<br>";

$my_array = array("Wallace","Grommit","Boromir","+98","0100873901","IRELAND");

list($a, $b, $c, $d, $e, $f) = $my_array;
echo " $a,  $b,  $c, $d, $e, $f.<br>";

$my_array = array("Jonathan","Edwards","Piepont","+1","0200983729","AMERICA");

list($a, $b, $c, $d, $e, $f) = $my_array;
echo " $a,  $b,  $c, $d, $e, $f.<br>";

$my_array = array("Mose","Alihu","Asaph","+2","02990033","ISRAEL");

list($a, $b, $c, $d, $e, $f) = $my_array;
echo " $a,  $b,  $c, $d, $e, $f.<br>";

$my_array = array("Otoyo","Wafula","Joel","+254","0777799920","KENYA");

list($a, $b, $c, $d, $e, $f) = $my_array;
echo " $a,  $b,  $c, $d, $e, $f.<br>";

$my_array = array("Mapete","Mwambingu","Simba","+257","0987483292","TANZANIA");

list($a, $b, $c, $d, $e, $f) = $my_array;
echo " $a,  $b,  $c, $d, $e, $f.<br>";

$my_array = array("David","Brainand","Saraton","+1","0043899292","AMERICA");

list($a, $b, $c, $d, $e, $f) = $my_array;
echo " $a,  $b,  $c, $d, $e, $f.<br>";

$my_array = array("John","Owen","Pompi","+267","0747492922","ZAMBIA");

list($a, $b, $c, $d, $e, $f) = $my_array;
echo " $a,  $b,  $c, $d, $e, $f.<br>";

$my_array = array("John","Mag","Bunyan","+256","09837328","UGANDA");

list($a, $b, $c, $d, $e, $f) = $my_array;
echo " $a,  $b,  $c, $d, $e, $f.<br>";

$my_array = array("Vonstaupitz","","johan Gregory","+32","0600984733","GERMANY");

list($a, $b, $c, $d, $e, $f) = $my_array;
echo " $a,  $b,  $c, $d, $e, $f.<br>";
// echo "$corrupted_names";
?>
