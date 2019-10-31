<?

include "bd.php";
//user,game_id,zen,slots,srok,treg
$zp="WHERE stat LIKE '1'";
$sql="SELECT id,ip,inf FROM orders $zp";
$result = @mysql_query("$sql",$db);
$k=@mysql_num_rows($result);
for($i=0;$i<$k;$i++){
	$id=@mysql_result($result, $i,"id");
	$mip=@mysql_result($result, $i,"ip");
	$minf=@mysql_result($result, $i,"inf");

	$ip=$_POST["ip_".$id];
	$inf=$_POST["inf_".$id];
	
	//echo $id." - ".$ip."<br>";
	
//	$port=$_POST["port_".$id];
	if (($ip!="")&&(($ip!=$mip)||($minf!=$inf))){
		$sql2="UPDATE orders SET ip='$ip', inf='$inf' ".$zp." AND id LIKE '$id'";
		$result2 = @mysql_query("$sql2",$db);
		//echo $sql2." - r=".$result2*1;
	}

	
}

echo "OK";
//print_r($_POST);

?>