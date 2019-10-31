<?
session_start();
$log=$_SESSION["log"];
if ($log!=""){
include "bd.php";

$id=$_GET['id'];

if ($id!=-1){

$sql = "DELETE FROM orders WHERE id LIKE '$id' AND user LIKE '$log' AND stat LIKE '0'";
$result = @mysql_query("$sql",$db);
}else{
$sql = "DELETE FROM orders WHERE user LIKE '$log'";
$result = @mysql_query("$sql",$db);
}
HEADER("LOCATION: /?cat=cart");
}else{HEADER("LOCATION: index.php");}
?>