<?php
define('hata1',"Veritabanına bağlanamadı!");
@mysql_connect("localhost","root") or die(hata1);
@mysql_select_db("kaleydoskop") or die(hata1);
mysql_query("SET NAMES ´latin5´");
mysql_query("SET CHARACTER SET latin5");  
mysql_query("SET COLLATION_CONNECTION = ´latin5_turkish_ci´ ");

?>