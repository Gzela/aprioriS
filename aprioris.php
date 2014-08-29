<?php
include ("config.php");
$j = $GLOBALS['j'];
$l = ($GLOBALS['maxkol']) -1;
$i = 2;
$sup = ($_POST['sup']);
if (isset($_POST['check']))
{
While ($i <= $l)
{
$g = 1;
$k = 1;
	While ($k <= $j)
	{
	$kol = d.$i;
	$r = mysql_fetch_array(mysql_query("SELECT $kol FROM aprioris WHERE Id = '$k'"));
	$maxval .= $r[$kol];
	$k++;
	}
	

$val = explode (" ", $maxval);
$mp = (max($val));
$maxp = str_replace("p","",$mp);
$m1 .= $maxp." ";
	do
	{
	
		foreach ($val as $k => $v)
		{
			$t = t.($i - 1);
			$f = p.$g;
			If ((trim($v)) == (trim($f)))
			{
				
				${$t.$f} = ${$t.$f} + 1;
			}
		}

		$g++;
	}while ($g <= $maxp);
	$col = d.$i;
	${'ar'.$i} = array();
	$y = mysql_query("SELECT $col FROM aprioris");
	while ($z = mysql_fetch_array($y))
	{	
		${'ar'.$i}[] = $z[$col];
	}

	
$maxval = '';
$i++;
}
$m2 = explode(" ", $m1);
$maxx = (max($m2)); 
$i = 2;
$h = 1;
$z = 1;
$e = 1;
While ($h <= $maxx) 
{
If ((trim(${t1.p.$h})) >= $sup)
{
$dj = 0;
	do
	{
	$k = 2;
	
		If ((trim(${'ar2'}[$dj])) == (trim(p.$h)))
			{
				${tb.$e} = array();
				$rez .= " "."(".p.$h;
				${tb.$e}[] = p.$h;
				While ($k <= $l)
				{		
					$kk = $k + 1;
					$z = (trim(${ar.$kk}[$dj]));
					If ((${'t'.$k.$z}) >= $sup)
						{
							${tb.$e}[] = $z." ";
							$rez .= " ".$z;
							$k++;
						}
					else
						{
							$e++;
							$dj++;
							break 1;
						}
						
					
				}
				$rez .= ")";
			}
		else
			{ 
				$dj++;
			}	
	} while ($dj <= ($j - 1));	
}
$h++;
}
$i = 1;
While ($i <= $j)
{
$k = $i + 1;
	do
	{
		If ((${tb.$i}) == (${tb.$k}))
		{
			${stb.$i} = ${stb.$i} + 1;
		}
	$k++;
	} while ($k <= $j);
$i++;
}
echo $stb3;
$i = 1;
While ($i <= $j)
{
	If ((${stb.$i}) >= ($sup - 1))
	{
		$a = implode(" ", ${tb.$i});
		echo "<center>";
		echo "(";
		echo $a;
		echo ")<br>";
	}
$i++;
}

?>
<center>Podaj minimalne wsparcie (support) <br><br>
<form method="POST">
<input type ="text" name="sup">
<input type="submit" name="check" value="Policz"><br><br>
</form>