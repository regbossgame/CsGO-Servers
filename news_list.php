<?

echo '      <div class="left-column">
              <h2 class="yellow-head">Новости</h2>
              <div class="clear"></div>
              <div class="scroll-content">';

$sql="SELECT * FROM news ORDER BY treg DESC";
$result = @mysql_query("$sql",$db);
$k=@mysql_num_rows($result);
for($i=0;$i<$k;$i++){
	$id=@mysql_result($result, $i,"id");
	$name=@mysql_result($result, $i,"name");
	$txt=@mysql_result($result, $i,"txt");
	$stat=@mysql_result($result, $i,"stat");
	$treg=@mysql_result($result, $i,"treg");
	
	if ($stat==1){
	
echo '<a href="#" class="left-column--item">
                  <h3>'.$name.'<span> '.date('d.m.Y',$treg).'</span></h3>
				  <p>'.$txt.'</p></a>
				  ';
		
		
	}
	
}

echo "</div></div>";

?>