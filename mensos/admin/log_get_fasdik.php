<?php
include 'DB_driver.php';
$CITYDIK = $_GET['NMKELRDIK'];

$fasdik = mysql_query("SELECT DISTINCT KDFASDIK, NMFASDIK from pendidikan
WHERE KDKELR='$CITYDIK' ");
echo "<option>-- Pilih Fasilitas Pendidikan --</option>";
while($k = mysql_fetch_array($fasdik)){
    echo "<option value=\"".$k['KDFASDIK']."\">".$k['NMFASDIK']."</option>\n";
}
?>