<?
$ef7=true;
while ($ef7){
$nid=Rand(103312,999999);
$ef7=false;
		$sql29="SELECT id FROM $type WHERE id LIKE '$nid'";
		$result29 = @mysql_query($sql29,$db);
        $k29=@mysql_num_rows($result29);
		if ($k29>0){$ef7=true;}
		/*$sql2="SELECT id FROM users WHERE id LIKE '$nid'";
		$result2 = @mysql_query($sql2,$db);
        $k2=@mysql_num_rows($result2);
		if ($k2>0){$ef=true;}
		$sql2="SELECT id FROM games WHERE id LIKE '$nid'";
		$result2 = @mysql_query($sql2,$db);
        $k2=@mysql_num_rows($result2);
		if ($k2>0){$ef=true;}
		
		$sql2="SELECT id FROM forum WHERE id LIKE '$nid'";
		$result2 = @mysql_query($sql2,$db);
        $k2=@mysql_num_rows($result2);
		if ($k2>0){$ef=true;}
		$sql2="SELECT id FROM news WHERE id LIKE '$nid'";
		$result2 = @mysql_query($sql2,$db);
        $k2=@mysql_num_rows($result2);
		if ($k2>0){$ef=true;}
		*/
}
?>