<?
session_start();
include "conf.php";



$mid=$_GET["us_ords"];
//if (($log!="")&&($id>0)){

if ($mid=="wirt"){
	$mid="";
$sql="SELECT id FROM orders WHERE user LIKE '$log' AND stat LIKE '0'";
$result = @mysql_query("$sql",$db);
$k=@mysql_num_rows($result);	
	for($i=0;$i<$k;$i++){
	$id=@mysql_result($result, $i,"id");

$mid.=$id."-";
	
}

}


$mad=array();
$mad=explode("-",$mid);

for($i=0;$i<count($mad);$i++){

$id=$mad[$i];
$sql="SELECT game_id,user,pars FROM orders WHERE id LIKE '$id'";
$result = @mysql_query("$sql",$db);
//echo $sql." --- ".$result*1;
//	$id=@mysql_result($result, $i,"id");
if ($result!=""){
	$game_id=@mysql_result($result, 0,"game_id");
	$pars=@mysql_result($result, 0,"pars");
	$user=@mysql_result($result, 0,"user");
	
include "gen_port.php";
$port=$nport;
	
$key="-";
$rt=0;
if ($game_id==30){
$type=$game_id;
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
	
	
$sql2="UPDATE orders SET mykey='".$key."', com='0', port='".$port."', stat='1', comp='1', treg='".time()."' WHERE id LIKE '$id'";
$result2 = @mysql_query("$sql2",$db);


$sql2="UPDATE orders SET pars='$pars' WHERE id LIKE '$id'";
$result2 = @mysql_query("$sql2",$db);

	

$to  = "pavel.m89@bk.ru";//wirtbox@mail.ru


$subject = "Orochiplay.com Новый заказ!";

$de1.="summa_itogo=У димы спросить РУБ";

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




}

}
//}


echo "YES";
//HEADER("LOCATION: /?cat=lk#orders");
//}else{HEADER("LOCATION: /?cat=cart");}

?>