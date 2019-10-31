<?
if ($_GET["pas"]=="wirt"){
if ($bde!=1){include "bd.php";}


$bd="types";
$sql = "DROP TABLE ".$bd;
   $result = @mysql_query("$sql",$db);
   echo "DROP($bd)=".$result."<br>";
   
$sql = "CREATE TABLE ".$bd." (
	id int not null,
	game varchar(50) not null,
	name varchar(35) not null,
	slot1 int not null,
	slot2 int not null,
	zen int not null
	
)";
//zen decimal(6,1) not null
   $result = @mysql_query("$sql",$db);
	echo $bd."_rez($bd)=".$result."<br>";	

	
$sql="ALTER TABLE `".$bd."` ADD UNIQUE(`id`)";
$result = @mysql_query("$sql",$db);
echo $bd."_KEY_rez($bd)=".$result."<br>";	

$type=$bd;
include "reader.php";


}else{echo "ќшибка доступа Error 3312";}
?>