<?

$keys=array();

$file_name="settings/keys_".$type.".txt";

if (file_exists($file_name)){

$fp = fopen($file_name, "r");
$i29=0;
while (!feof($fp)){
	$mt = fgets($fp, 999);
	$mt = rtrim($mt);
	$keys[$i29]=$mt;
	
	$i29++;
	
}



$ef7=true;
while ($ef7){
$nkey=$keys[Rand(0,$i29-1)];
$ef7=false;
		$sql29="SELECT mykey FROM orders WHERE mykey LIKE '$nkey'";
		$result29 = @mysql_query($sql29,$db);
        $k29=@mysql_num_rows($result29);
		if ($k29>0){$ef7=true;}
}

}
?>