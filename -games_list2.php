<?

echo '     
<div class="container">
          <div class="game-list" style="height:500px;">
            <div class="game-list-inner">
              <h2><span> »</span>√–€</h2>
              <div class="clear"></div>
              <div>
			   <div id="container">

        <div id="main">';

$sql="SELECT * FROM games";
$result = @mysql_query("$sql",$db);
$k=@mysql_num_rows($result);
//$k=1;
for($i=0;$i<$k;$i++){
	$id=@mysql_result($result, $i,"id");
	$name=@mysql_result($result, $i,"name");
	$txt=@mysql_result($result, $i,"txt");


	echo '<div class="game-item">
                  
					<br><br>
					<br><br>
					<div class="block">
					<a href="#" class="zoom" id="blue">
					<img src="images/icons/gameicons/gicon'.$id.'.jpg">
					</a>
					<p>'.$name.'
				  	<button type="submit" onClick="showmod(1,'.$id.');">ƒŒ¡¿¬»“‹ ¬  Œ–«»Õ”</button>
					
					</p>
					<br>
					<br>
					</div>
					
					
                  
                  
				  
                </div>
				';
	
	
}
 

echo '              </div>
            </div>
          </div>
        </div>
		
		</div>
          </div>
	';

?>