<?php
include ("config.php");
$klm = 1;

//	Wczytanie danych z pliku tekstowego
$arr = file('dane.txt');
$array   = array();
foreach ($arr as $i => $val) 
{		
	$zmi = 1;
	$intodb  = explode(":", $val);
	$m 	     = count($intodb);
	$array[] = $m;
	// Wrzucenie danych do bazy
	foreach ($intodb as $j => $val1)
	{	
		$f 	 = $j + 1;
		$col = 'd'.$f;
		$kol = 'd'.$i;	
		mysql_query("ALTER TABLE aprioris ADD $col VARCHAR( 255 ) NOT NULL");
		while ($zmi <= 1)
		{
		mysql_query("INSERT INTO aprioris (d1) VALUES ('x')");
		break;
		}
		$zmi++;
		mysql_query("UPDATE aprioris SET $col='$val1' WHERE Id='$klm'");
	}
	$klm++;
}
$maxkol = max($array); // Ilość kolumn w bazie danych
mysql_close();
?>
		