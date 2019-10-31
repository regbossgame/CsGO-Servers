<?

echo '       <div class="container">
          <div class="game-list__mainpage game-list">       
            <div class="game-list-inner">
              <h2><span> Популярные</span>игры</h2><a href="/?cat=games" class="more">БОЛЬШЕ ИГР</a>
              <div class="clear"></div>
			  <div>
			  ';

$sql="SELECT * FROM games ORDER BY id";
$result = @mysql_query("$sql",$db);
$k=@mysql_num_rows($result);
for($i=0;$i<$k;$i++){
	$id=@mysql_result($result, $i,"id");
	$name=@mysql_result($result, $i,"name");
	$txt=@mysql_result($result, $i,"txt");
	///$txt=@mysql_result($result, $i,"txt");
	
//onClick="showmod(1,'.$id.');"
	echo '<a href="/?cat=game&id='.$id.'" class="game-item__mainpage game-item" style="cursor:pointer;">
			<div class="game-item--img">
                    <div class="border"><span></span><span></span><span></span><span></span></div>
					<img src="images/icons/gameicons/gicon'.$id.'.jpg">
                  </div>
                  <p>'.$name.'</p></a>';
	
	
}
 

echo '              </div>
            </div>
          </div>
        </div>';

?>