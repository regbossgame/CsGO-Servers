<?


include "conf.php";

$de1="";
$sus=0;
$sql="SELECT * FROM orders WHERE stat LIKE '0' AND user LIKE '".$_SESSION['log']."'";
$result = @mysql_query("$sql",$db);
$k=@mysql_num_rows($result);
for($i=0;$i<$k;$i++){
	
	$id=@mysql_result($result, $i,"id");
	$game_id=@mysql_result($result, $i,"game_id");
	$game=@mysql_result($result, $i,"game");
	$pars=@mysql_result($result, $i,"pars");
	$user=@mysql_result($result, $i,"user");
	$zen=@mysql_result($result, $i,"zen");
	$srok=@mysql_result($result, $i,"srok");
	$slots=@mysql_result($result, $i,"slots");
	$sus+=$zen;
	
	$de1.="$game| $zen руб. | $srok дней | СЛОТЫ=$slots<br>";
	
	include "gen_port.php";
$port=$nport;
	
$key="-";
$rt=0;
if ($game_id==30){
$type=30;
include "gen_key.php";
$key=$nkey;

	$pars.="de_dust*#".rand(1000,9999)."*#".rand(1000,9999)."*#CSGO_".$user."_NEW_".rand(100,999)."*#+game_type 0 +game_mode 0 +mapgroup mg_allclassic*#".$key;
$rt=1;
}

if ($game_id==60){
		$pars="RUST_".$user."_NEW_".rand(100,999)."*#".rand(100000,999999)."*#4000*#Procedural Map*#".rand(1000,9999)."*#true";
		$rt=1;
}

if ($rt==0){
	$pars="NEW_".$user."_SERVER_".rand(100,999)."*#".rand(100000,999999)."*#".rand(100000,999999)."*#map_name";
}
	
	$sql2="UPDATE orders SET com='0', port='$port', mykey='$key', stat='1', comp='1', treg='".time()."' WHERE id LIKE '$id'";
	$result2 = @mysql_query("$sql2",$db);

	
	$sql2="UPDATE orders SET pars='$pars' WHERE id LIKE '$id'";
	$result2 = @mysql_query("$sql2",$db);	
	
	

	
	
}

$de1.="summa_itogo=".$sus." РУБ";

/*
$k=$_GET["k"];

$buyid=30;
$slots=4;
$srok=2;
$tick=128;


$sql="SELECT name,txt FROM games WHERE id LIKE '$buyid'";
$result = @mysql_query("$sql",$db);
	$i=0;
	$name=@mysql_result($result, $i,"name");
	$txt=@mysql_result($result, $i,"txt");

	
$sql="SELECT name,zen FROM types WHERE game LIKE '$name'";
$result = @mysql_query("$sql",$db);


$i=0;
	$nam=@mysql_result($result, $i,"name");
	$zen=@mysql_result($result, $i,"zen");


for($i=0;$i<$k;$i++){



	$type="orders";
	include "gen_id.php";

	$hostname=$log."*".$nid."*".$name." NEW!";
	$hostname=substr($hostname,0,50);
	
	$map="de_dust2";
	$pass=Rand(10000,999999);
	
$pars="0**0";

	$treg=time();
	$rzen=$slots*$srok*$zen;
	
$sql="INSERT INTO orders (id,user,game,game_id,slots,srok,stat,zen,treg,hostname,mode,com,map,pass,pars,tick,entick) VALUES('$nid','$log','$name','$buyid','$slots','".($srok*30)."','1','$rzen','$treg','$hostname','0','1','$map','$pass','$pars','$tick','1')";
echo $sql;
$result = @mysql_query("$sql",$db);
echo "  - - -   R=".($result*1)."<br>";
	
	
}

*/



$to  = "pavel.m89@bk.ru";//wirtbox@mail.ru


$subject = "Orochiplay.com Новый заказ!";


$message = ' 
<html> 
    <head> 
        <title>Orochiplay.com Новый заказ!</title> 
    </head> 
    <body> 
	<h2>Новый заказ (оплата)</h2>
        <p>Логин: '.$_SESSION['log'].'</p> 
        <p>'.$de1.'</p> 
    </body> 
</html>'; 



$headers  = 'Content-type: text/html; charset="utf-8" \r\n ';
$headers .= 'From: $to \r\n';
$headers .= 'Reply-To: $to \r\n';


$r1=mail($to, $subject, $message, $headers);



HEADER("LOCATION: /?cat=lk");

?>