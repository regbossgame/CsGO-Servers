<?
if ($_GET["pas"]=="wirt"){
if ($bde!=1){include "bd.php";}


$bd="forum_razdel";
$sql = "DROP TABLE ".$bd;
   $result = @mysql_query("$sql",$db);
   echo "DROP($bd)=".$result."<br>";
   
$sql = "CREATE TABLE ".$bd." (
	id int not null,
	user varchar(15) not null,
	user_id int not null,
	name varchar(50) not null,
	stat int not null,
	treg varchar(30) not null
)";

   $result = @mysql_query("$sql",$db);
	echo $bd."_rez($bd)=".$result."<br>";	
	
$sql="ALTER TABLE `".$bd."` ADD UNIQUE(`id`)";
$result = @mysql_query("$sql",$db);
echo $bd."_KEY_rez($bd)=".$result."<br>";	

$type=$bd;
include "reader.php";



//=================

$bd="forum_tema";
$sql = "DROP TABLE ".$bd;
   $result = @mysql_query("$sql",$db);
   echo "DROP($bd)=".$result."<br>";
   
$sql = "CREATE TABLE ".$bd." (
	id int not null,
	razdel int not null,
	user varchar(15) not null,
	user_id int not null,
	name varchar(50) not null,
	stat int not null,
	kols int not null,
	last varchar(50) not null,
	lreg varchar(30) not null,
	treg varchar(30) not null
)";

   $result = @mysql_query("$sql",$db);
	echo $bd."_rez($bd)=".$result."<br>";	
	
$sql="ALTER TABLE `".$bd."` ADD UNIQUE(`id`)";
$result = @mysql_query("$sql",$db);
echo $bd."_KEY_rez($bd)=".$result."<br>";	

$type=$bd;
include "reader.php";



//=================


$bd="forum_msg";
$sql = "DROP TABLE ".$bd;
   $result = @mysql_query("$sql",$db);
   echo "DROP($bd)=".$result."<br>";
   
$sql = "CREATE TABLE ".$bd." (
	id int not null,
	tema int not null,
	user varchar(15) not null,
	user_id int not null,
	txt text not null,
	stat int not null,
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