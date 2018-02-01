<?php
$host = "127.0.0.1"; // localhost
$user = "root"; // root
$pass = ""; // dikosongkan saja
$db   = "pengarsipan_surat";

$konek = mysql_connect($host, $user, $pass);
mysql_select_db($db);
