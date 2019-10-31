<?

include "bd.php";
//user,game_id,zen,slots,srok,treg
$comp=$_GET["comp"];
$lim=$_GET["lim"];
$zp="WHERE stat LIKE '1' AND comp LIKE '".$comp."'";
$sql="SELECT * FROM orders $zp ORDER BY user,game_id,treg DESC";
$result = @mysql_query("$sql",$db);
$k=@mysql_num_rows($result);
$rt="";
if ($k==0){$rt="NULL";}
for($i=0;$i<$k;$i++){
	$id=@mysql_result($result, $i,"id");
	$game_id=@mysql_result($result, $i,"game_id");
	$game=@mysql_result($result, $i,"game");
	$zen=@mysql_result($result, $i,"zen");
	$user=@mysql_result($result, $i,"user");
	$slots=@mysql_result($result, $i,"slots");
	$srok=@mysql_result($result, $i,"srok");
	$treg=@mysql_result($result, $i,"treg");
	$com=@mysql_result($result, $i,"com");
	$pars=@mysql_result($result, $i,"pars");
	$hostname=@mysql_result($result, $i,"hostname");
	$mode=@mysql_result($result, $i,"mode");
	
	$pass=@mysql_result($result, $i,"pass");
	$gpass=@mysql_result($result, $i,"gpass");
	$map=@mysql_result($result, $i,"map");
	$port=@mysql_result($result, $i,"port");
	$key=@mysql_result($result, $i,"mykey");
	$tick=@mysql_result($result, $i,"tick");
	
	$days=$srok-round((time()-$treg)/86400);

/*
id:integer;
gameId:integer;
slots:integer;
days,srok,port:integer;
com:Integer;
user:string[50];
pars:array [0..100] of string;
*/
		
	$rt.=$id."*#".$game_id."*#".$slots."*#".$days."*#".$srok."*#".$port."*#".$com."*#".$user."*#".$pars."*#";
	$rt.="\r\n";

}

$sql="UPDATE orders SET com='1' ".$zp." AND com LIKE '2'";
$result = @mysql_query("$sql",$db);

//$sql="UPDATE orders SET stat='2', com='0', port='0', mykey='' WHERE (stat>0) AND (treg<".(time()-$srok*86400).")";
//$result = @mysql_query("$sql",$db);

//$sql="DELETE FROM orders WHERE (stat LIKE '0') AND (treg<".(time()-3600).")";
//$result = @mysql_query("$sql",$db);



echo $rt;//." = ".$zp;

?>