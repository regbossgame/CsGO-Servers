<?
session_start();
$log=$_SESSION["log"];
$prav=$_SESSION["prav"];
if ($log!="" && $prav>=10){
include "bd.php";

$id=$_GET['id'];


$sql = "DELETE FROM forum_msg WHERE id LIKE '$id'";
$result = @mysql_query("$sql",$db);
}

HEADER("LOCATION: ".$_SERVER['HTTP_REFERER']);

?>