<?

$buyid=$_GET["buy"];
	  if ($buyid!=""){

	  include "bd.php";

$sql="SELECT name,txt FROM games WHERE id LIKE '$buyid'";
$result = @mysql_query("$sql",$db);
	$i=0;
	$name=@mysql_result($result, $i,"name");
	$txt=@mysql_result($result, $i,"txt");

	
$sql="SELECT id,name,slot1,slot2,zen FROM types WHERE game LIKE '$buyid'";
$result = @mysql_query("$sql",$db);

$i=0;
	$id=@mysql_result($result, $i,"id");
	$nam="-";//@mysql_result($result, $i,"name");
	$slot1=@mysql_result($result, $i,"slot1");
	$slot2=@mysql_result($result, $i,"slot2");
	$zen=@mysql_result($result, $i,"zen");

$rt=$name."*#".$nam."*#".$slot1."*#".$slot2."*#".$zen."*#".$buyid;

	 
echo $rt;

	  
	  }else{echo "Erroro!";}
?>