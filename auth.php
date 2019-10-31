<?
session_start();

include "bd.php";

if ($_POST['login']!=""){//3
/*$user_name=strtolower($_POST['user_name']);
$user_pass=strtolower($_POST['user_pass']);
*/
$user_name=$_POST['login'];
$user_pass=$_POST['pass'];

//echo $user_name."|".$user_pass;

$sql="SELECT * FROM users WHERE log LIKE '$user_name' AND pas LIKE '$user_pass'";
        $result = @mysql_query($sql,$db);
        $k=@mysql_num_rows($result);
if ($k>0){
$log = @mysql_result($result, 0, "log");
$pas = @mysql_result($result, 0, "pas");
$name = @mysql_result($result, 0, "name");
$id = @mysql_result($result, 0, "id");
$stat7 = @mysql_result($result, 0, "stat");


$_SESSION['log']=$log;
$_SESSION["myname"]=$name;
$_SESSION["userid"]=$id;
$_SESSION["prav"]=$stat7;

HEADER("LOCATION: index.php");
}else{HEADER("LOCATION: index.php?msg=error2");}

}else{HEADER("LOCATION: index.php?msg=error2");}

?>