<?
$ef7=true;
while ($ef7){
$nport=Rand(27015,27999);
$ef7=false;
		$sql29="SELECT port FROM orders WHERE port LIKE '$nport'";
		$result29 = @mysql_query($sql29,$db);
        $k29=@mysql_num_rows($result29);
		if ($k29>0){$ef7=true;}
}
?>