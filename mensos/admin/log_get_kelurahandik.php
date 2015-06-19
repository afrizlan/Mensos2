<?php
include 'DB_driver.php';
$propinsidik = $_GET['NMKECADIK'];

$kota = mysql_query("SELECT DISTINCT KDKELR, NMKELR from pendidikan
WHERE KDKECA='$propinsidik' ");
echo "<option>-- Pilih Kelurahan --</option>";
while($k = mysql_fetch_array($kota)){
    echo "<option value=\"".$k['KDKELR']."\">".$k['NMKELR']."</option>\n";
}
?>