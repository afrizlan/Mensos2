<?php
include 'DB_driver.php';
$CITY = $_GET['NMKELR'];

$faskes = mysql_query("SELECT DISTINCT KD_FASKES, NAMA_FASKES from kesehatan
WHERE KDKELR='$CITY' ");
echo "<option>-- Pilih Fasilitas Kesehatan --</option>";
while($k = mysql_fetch_array($faskes)){
    echo "<option value=\"".$k['KD_FASKES']."\">".$k['NAMA_FASKES']."</option>\n";
}
?>