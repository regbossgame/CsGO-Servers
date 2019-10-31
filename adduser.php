<?

include "conf.php";

$log=$_POST["login"];
$re="-";

if ($log!=""){

$sql="SELECT * FROM users WHERE log LIKE '$log'";
        $result2 = @mysql_query($sql,$db);
        $k=@mysql_num_rows($result2);
if ($k>0){
	$re="error_usr";
}

if ($re=="-"){
$pas=$_POST["pass"];
$name=$_POST["name"];
$email=$_POST["email"];

$log=check_txt($log);
$pas=check_txt($pas);
$name=check_txt($name);
$email=check_txt($email);


$treg=time();

//$txt=preg_replace('~[_\W\d]~', '', $txt);

$type="users";
include "gen_id.php";

$sql = "INSERT INTO $type (id,log,pas,name,email,stat,ip,treg,last ) VALUES ( '$nid','$log','$pas','$name','$email','1','$mip','$treg','$treg' )";
$result = @mysql_query("$sql",$db);
if (($result*1)==1){
	
	$re="ok";

	
$to  = $email;


$subject = "Регистрация прошла успешно!";


$message = ' 
<html> 
    <head> 
        <title>Регистрация</title> 
    </head> 
    <body> 
	<h2>Регистрация на сайте orochiplay.com</h2>
        <p>Логин: '.$log.'</p> 
		<p>Пароль: '.$pas.'</p> 
    </body> 
</html>'; 

//Content-type: text/html; charset=\"windows-1251\" \r\n Reply-To: $from \r\n", "-f$from

$headers  = 'Content-type: text/html; charset="utf-8" \r\n ';
$headers .= 'From: $to \r\n';
$headers .= 'Reply-To: $to \r\n';


$r1=mail($to, $subject, $message, $headers);
	
	
	}
}
}
//$re="ok";
if (($result*1)==0){$re="error";}


HEADER("LOCATION: index.php?msg=".$re);


?>