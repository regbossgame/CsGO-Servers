<?
include "bd.php";

$id=$_GET["id"];

$sql="SELECT txt FROM games WHERE id LIKE '$id'";
$result = @mysql_query("$sql",$db);
$i=0;
	$txt=@mysql_result($result, $i,"txt");
	
	if ($txt==""){$txt="Описание в стадии оформления.";}
	
//</td>
//<td style='vertical-align: top;' align='left'>	
echo "<table border=0><tr><td>
<img src='images/icons/gameicons/gicon".$id.".jpg' style='width:156px;margin-right:10px;float:left;'>
<p style='font-size:9pt;margin-top:5px;text-align:justify'>".$txt."</p></td></tr></table>
";

	
?>