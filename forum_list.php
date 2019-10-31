<?

echo '<div class="right-column">
              <h2 class="yellow-head">Форум</h2>
              <div class="clear"></div>
              <div class="scroll-content">';

$sql2="SELECT id,name,user,treg,last,lreg FROM forum_tema WHERE (stat > 0) ORDER BY lreg DESC";
$result2 = @mysql_query("$sql2",$db);
$k2=@mysql_num_rows($result2);
for($i2=0;$i2<$k2;$i2++){
	$id_t=@mysql_result($result2, $i2,"id");
	$name_t=@mysql_result($result2, $i2,"name");
	$user_t=@mysql_result($result2, $i2,"user");
	//$user_id_t=@mysql_result($result2, $i2,"user_id");
	$treg=@mysql_result($result2, $i2,"treg");
	$last=@mysql_result($result2, $i2,"last");
	$lreg=@mysql_result($result2, $i2,"lreg");
	//$prosm=@mysql_result($result2, $i2,"kols");	
	
	
echo '<a href="/?cat=forum-tema&id='.$id_t.'" class="right-column--item">
                  <h4 style="font-size:12pt;"><span>'.$name_t.'</span> </h4>
				  <p style="font-size:10pt;">Автор: '.$user_t.', '.date('d.m.Y (H:i)',$treg).'</p>
				  <p style="font-size:10pt;">Обновил: '.$last.', '.date('d.m.Y (H:i)',$lreg).'</p></a>
				';
		
		
	
	
}			  
echo "</div></div>";

?>