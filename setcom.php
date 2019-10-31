<?
include "conf.php";

if ($log!=""){
$id=$_GET["id"];
$com=$_GET["com"];

$sql="UPDATE orders SET com='$com' WHERE user LIKE '$log' AND id LIKE '$id'";
$result = @mysql_query("$sql",$db);

echo $com;

//HEADER("LOCATION: /?cat=lk");
}

?>