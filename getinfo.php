<?
include "bd.php";

$id=$_GET["id"];

$sql="SELECT inf,com,port,ip FROM orders WHERE id LIKE '$id'";
$result = @mysql_query("$sql",$db);
$i=0;
	$port=@mysql_result($result, $i,"port");
	$ip=@mysql_result($result, $i,"ip");
	$inf=@mysql_result($result, $i,"inf");
	$com=@mysql_result($result, $i,"com");

	//if ($inf==)
	
echo $inf."#".$com."#".$ip."#".$port;//."#".$rt;
	
?>