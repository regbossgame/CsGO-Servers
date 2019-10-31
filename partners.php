<?

echo '<div class="content">
        <div class="container">
          <div class="partner-block">
            <h2> <span>НАШИ</span>ПАРТНЕРЫ</h2>
			<div class="partner-inner partner-inner__list">';
            

$sql="SELECT id,name,name2 FROM part";
$result = @mysql_query("$sql",$db);
$k=@mysql_num_rows($result);

for($i=0;$i<$k;$i++){
	$id=@mysql_result($result, $i,"id");
	$name=@mysql_result($result, $i,"name");
	$name2=@mysql_result($result, $i,"name2");
			
			echo '<a href="/?cat=partner&id='.$id.'" class="partner-item">
                <div class="img-cont img-cont__list"><img src="media/userfoto/foto'.$id.'.png" alt="'.$name2.'"></div>
                <p>'.$name.'</p>
                <p>'.$name2.'</p></a>';
}

            echo '</div>
          </div>
        </div>
      </div>';

?>