<meta http-equiv=”Content-Type” content=”text/HTML; charset=utf-8″ />

<head>
	<meta charset="UTF-8">
	<title>Üye Listesi</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Sıra</th>
            <th>Ad</th>
            <th>Soyad</th>
            <th>E-Mail</th>
            <th>Şifre</th>
        </tr>
    </thead>
    <tbody>

          
<?php
include("dbsettings.php");
$sorgu = mysql_query("select * from accounts");
$toplam = mysql_num_rows($sorgu);

for($i=0;$i<$toplam;$i++)
{
    $ad = mysql_result($sorgu,$i,'name');
    $soyad = mysql_result($sorgu,$i,'surname');
    $email = mysql_result($sorgu,$i,'email');
    $sifre = mysql_result($sorgu,$i,'password');

    echo "<tr>";
    echo "<td>".($i+1)."</td>";
    echo "<td>".$ad."</td>";
    echo "<td>".$soyad."</td>";
    echo "<td>".$email."</td>";
    echo "<td>".$sifre."</td>";
    echo "</tr>";
}

?>