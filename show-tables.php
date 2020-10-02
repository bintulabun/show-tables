<?php

require "koneksi.php";

$q = "SHOW TABLES";
$x = mysql_query($q);
$jml = mysql_num_rows($x);

echo "jumlah tabel: $jml\n";

$i = 0;

while($data = mysql_fetch_array($x)){

$z = "SELECT * FROM $data[$i]";

$z = mysql_query($z);

$jmlh = mysql_num_rows($z);

echo "$data[$i] ($jmlh baris)\n";
$i + 1;

}

?>
