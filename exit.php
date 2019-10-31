<?
ini_set('session.gc_maxlifetime', 9000000);
ini_set('session.cookie_lifetime', 9000000);
session_start();

$_SESSION["log"]="";
unset($_SESSION["log"]);
$_SESSION["myname"]="";
unset($_SESSION["myname"]);
$_SESSION["userid"]="";
unset($_SESSION["userid"]);
$_SESSION["prav"]="";
unset($_SESSION["prav"]);

header("LOCATION: index.php");
?>