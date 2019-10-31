<?
session_start();
$log=$_SESSION["log"];
if ($log!=""){
include "conf.php";

$uid=$_SESSION["userid"];

$id7=$_POST["id"];
$txt=$_POST["txt"];


$txt=check_txt($txt);

$txt=str_replace("\r\n","<br>",$txt);

//$txt=preg_replace('~[_\W\d]~', '', $txt);

$type="forum_msg";
include "gen_id.php";

$sql = "INSERT INTO $type (id,tema,user,user_id,txt,stat,treg ) VALUES ( '$nid','$id7','$log','".$uid."','$txt','1','".time()."' )";
$result = @mysql_query("$sql",$db);

$sql="UPDATE forum_tema SET last='".$log."', lreg='".time()."' WHERE id LIKE '$id7'";
$result = @mysql_query("$sql",$db);

HEADER("LOCATION: /?cat=forum-tema&id=".$id);

}else{HEADER("LOCATION: index.php");}
?>