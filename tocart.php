<?
session_start();
$log=$_SESSION["log"];
if ($log!=""){
include "bd.php";

$buyid=$_POST["buyid"];
$slots=$_POST["slots"];
$srok=$_POST["srok"];
$tick=$_POST["ticks"];
$txto=$_POST["txt"];

$sql="SELECT name,txt FROM games WHERE id LIKE '$buyid'";
$result = @mysql_query("$sql",$db);
	$i=0;
	$name=@mysql_result($result, $i,"name");
	$txt=@mysql_result($result, $i,"txt");


	
	
$sql="SELECT game,zen FROM types WHERE id LIKE '$buyid'";
$result = @mysql_query("$sql",$db);

	$i=0;
	$nam=@mysql_result($result, $i,"game");
	$zen=@mysql_result($result, $i,"zen");

	$type="orders";
	include "gen_id.php";

	$hostname=$log."*".$nid."*".$name." NEW!";
	$hostname=substr($hostname,0,50);
	
	if ($buyid==30){$map="de_dust2";}
	if ($buyid==60){$map="Procedural Map";}//HapisIsland
	$pass=Rand(10000,999999);
	
$pars=$tick."*#".$txto;

$a1=0;

if ($tick!=""){
if ($tick=="128"){$a1=5;}
	if ($ticks=="100"){$a1=5;}
	if ($ticks=="2"){$a1=10;}
	if ($ticks=="3"){$a1=15;}

}
if ($slots==0) {$slots=1;}
	$treg=time();
	$rzen=$slots*$srok*($zen+$a1);
	if ($rzen!=0){
$sql="INSERT INTO orders (id,user,game,game_id,slots,srok,stat,zen,treg,com,pars) VALUES('$nid','$log','$name','$buyid','$slots','".($srok*30)."','0','$rzen','$treg','0','$pars')";

$result = @mysql_query("$sql",$db);
	}
//echo "-<br>";
//	print_r($_POST);
//echo "<br>-";	
//	echo "<br>r=".$result."|rzen=".$rzen;
//echo $sql;
HEADER("LOCATION: /?cat=cart#my-orders");
}else{HEADER("LOCATION: /?cat=msg&t=1");}
?>