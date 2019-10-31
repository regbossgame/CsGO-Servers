<?
include "conf.php";

if ($log!=""){
$id=$_POST["id"];
$kola=$_POST["kola"];



/*

128*#de_dust*#8407*#9670*#CSGO_admin_NEW_871*#+game_type 0 +game_mode 0 +mapgroup mg_allclassic*#EC9D74EC74FB4CF83573FA46DBA4D0E9

$hostname=$_POST["hostname"];
//$pass=$_POST["pass"];
$gpass=$_POST["gpass"];
$map=$_POST["map"];
$pars=$_POST["pars"];
$tick=$_POST["ticks"];
$gmode=$_POST["gmode"];

*/
//$pars=str_replace("<","[",$pars);
//$pars=str_replace(">","]",$pars);
//$pars=str_replace("'",'"',$pars);

//$pars=str_replace("\r\n","**",$pars);
$pars="";
for($i=1;$i<=$kola;$i++){
	$pars.=$_POST["par".$i]."*#";
}


$sql="UPDATE orders SET pars='$pars' WHERE user LIKE '$log' AND id LIKE '$id'";
$result = @mysql_query("$sql",$db);

//echo "R=".($result*1);
//$sql="UPDATE orders SET com='2' WHERE user LIKE '$log' AND id LIKE '$id' AND (com>=1)";
//$result = @mysql_query("$sql",$db);


HEADER("LOCATION: /?cat=lk&opn=".$id."#ret_".$id);
}

?>