<?php
include 'DB_driver.php';
$propinsi = $_GET['NMKECA'];

$kota = mysql_query("SELECT DISTINCT KDKELR, NMKELR from kesehatan
WHERE KDKECA='$propinsi' ");
echo "<option>-- Pilih Kelurahan --</option>";
while($k = mysql_fetch_array($kota)){
    echo "<option value=\"".$k['KDKELR']."\">".$k['NMKELR']."</option>\n";
}
?>