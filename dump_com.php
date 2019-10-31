<?
if ($_GET["pas"]=="wirt"){
if ($bde!=1){include "bd.php";}


$bd="com";
$sql = "DROP TABLE ".$bd;
   $result = @mysql_query("$sql",$db);
   echo "DROP($bd)=".$result."<br>";
   
$sql = "CREATE TABLE ".$bd." (
	id int not null,
	name varchar(50) not null,
	ip varchar(30) not null,
	txt text(255) not null,
	stat int not null,
	treg varchar(30) not null
)";

   $result = @mysql_query("$sql",$db);
	echo $bd."_rez($bd)=".$result."<br>";	
	
$sql="ALTER TABLE `".$bd."` ADD UNIQUE(`id`)";
$result = @mysql_query("$sql",$db);
echo $bd."_KEY_rez($bd)=".$result."<br>";	




}else{echo "ќшибка доступа Error 3312";}
?>