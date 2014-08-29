<?php 
include ("intodb.php");
include ("config.php");
$j = mysql_query("SELECT * FROM aprioris ORDER BY Id DESC"); // Ostatnie Id w bazie
$l = $GLOBALS['maxkol']; // Ilość kolumn w bazie
$i = 1;
$sp = 1;
$pp = 0;
While ($i < $j)
	{	
		$c = $l;
		$b = $l - 1;
		do 
		{	
			$r1 = mysql_fetch_array(mysql_query("SELECT * FROM aprioris WHERE Id ='$i'"));
			$col = 'd'.$c;
			$kol = 'd'.$b;
			$t1 = $r1[$col];
			$t2 = $r1[$kol];
			$kkk .="$t1";
			$c-- ;
			$b-- ;
			
			
		} while ($b > 0);
		$exp = explode(" ",($kkk));
		$x = count($exp);
		foreach ($exp as $k => $v)
		{
			$r = d.($x - $k);
			$f = $k + 1;
			if ($f < $x) 
			{
			if ((trim($exp[$k])) === (trim($exp[$f]))) //del
			{
				mysql_query("UPDATE aprioris SET $r='x ' WHERE Id='$i'");
			}
			}	
		}
		$c = $l;
		$b = $l - 1;
		do
		{	
			$r1 = mysql_fetch_array(mysql_query("SELECT * FROM aprioris WHERE Id ='$i'"));
			$col = 'd'.$c;
			$kol = 'd'.$b;
			$t1 = $r1[$col];
			$t2 = $r1[$kol];
			$lll .="$t1";
			$c-- ;
			$b-- ;
			
			
		} while ($b > 0);
		$exp = explode(" ",($lll));
		$x = count($exp);
		do
		{
		foreach ($exp as $y => $u)
		{
		
			$q  = $y + 1; 
			$w  = d.($x - $q); 
			$qw = mysql_fetch_array(mysql_query("SELECT * FROM aprioris WHERE Id ='$i'"));
			$qe = $qw[$w];
			$t  = d.($x - $y); 
			$e  = $qw[$t]; 
			//echo $qe."<br>";
			if ($q < $x) 
			{
			if ((trim($qe)) === 'x') 
			{
				//echo $y."<br>";
				mysql_query("UPDATE aprioris SET $w='$e' WHERE Id='$i'");
				mysql_query("UPDATE aprioris SET $t='x' WHERE Id='$i'");
				
			}
			$sp++;
			}
			}
		$s++;
		} while ($s <= $x);
		do
		{
		$ww  = "d".($x - $pp);
		$qp  = mysql_fetch_array(mysql_query("SELECT * FROM aprioris WHERE Id ='$i'"));
		$qpa = $qp[$ww];
		if ((trim($qpa)) === 'x') 
		{
			mysql_query("UPDATE aprioris SET $ww='' WHERE Id='$i'");
		}
		$pp++;
		}while ($pp <= $l);
	$i++;		
	}
echo "<center>Przejdź do aprioriS <br><br>
<form action ='aprioris.php' method='POST'>
<input type='submit' value='Przejdź'>
";
mysql_close();


?>