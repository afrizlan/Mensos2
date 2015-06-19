<?php
$base="masmaal";
$konek=mysql_connect("localhost:90","root","");
$base=mysql_select_db($base);
if(!$konek && !$base) {
die('Could not connect: '.mysql_error());
}