<?
if ($_GET["pas"]=="wirt"){
if ($bde!=1){include "bd.php";}


$bd="orders";
$sql = "DROP TABLE ".$bd;
   $result = @mysql_query("$sql",$db);
   echo "DROP($bd)=".$result."<br>";
   
$sql = "CREATE TABLE ".$bd." (
	id int not null,
	user varchar(15) not null,
	game varchar(50) not null,
	game_id int not null,
	slots int not null,
	srok int not null,
	stat int not null,
	zen int not null,
	ip varchar(20) not null,
	mykey varchar(40) not null,
	port int not null,
	com int not null,
	comp varchar(30) not null,
	inf int not null,
	pars text not null,
	treg varchar(30) not null
)";

   $result = @mysql_query("$sql",$db);
	echo $sql."_rez($bd)=".$result."<br>";	

	
$sql="ALTER TABLE `".$bd."` ADD UNIQUE(`id`)";
$result = @mysql_query("$sql",$db);
echo $bd."_KEY_rez($bd)=".$result."<br>";	

$type=$bd;
include "reader.php";


}else{echo "ќшибка доступа Error 3312";}
?>