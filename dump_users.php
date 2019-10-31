<?
if ($_GET["pas"]=="wirt"){
if ($bde!=1){include "bd.php";}


$bd="users";
$sql = "DROP TABLE ".$bd;
   $result = @mysql_query("$sql",$db);
   echo "DROP($bd)=".$result."<br>";
   
$sql = "CREATE TABLE ".$bd." (
	id int not null,
	log varchar(15) not null,
	pas varchar(50) not null,
	name varchar(15) not null,
	email varchar(50) not null,
	stat int not null,
	ip varchar(20) not null,
	last varchar(30) not null,
	treg varchar(30) not null
)";

   $result = @mysql_query("$sql",$db);
	echo $bd."_rez($bd)=".$result."<br>";	

	
$sql="ALTER TABLE `".$bd."` ADD UNIQUE(`id`)";
$result = @mysql_query("$sql",$db);
echo $bd."_KEY_rez($bd)=".$result."<br>";	

$type=$bd;
include "reader.php";


}else{echo "ќшибка доступа Error 3312";}
?>