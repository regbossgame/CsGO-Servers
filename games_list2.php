<?

echo '     
<div class="container">
          <div class="game-list">       
            <div class="game-list-inner">
              <h2><span style="margin:0px;padding:0px;">И</span>ГРЫ</h2>
              <div class="clear"></div>
              <div>';

$sql="SELECT * FROM games ORDER BY id";
$result = @mysql_query("$sql",$db);
$k=@mysql_num_rows($result);

for($i=0;$i<$k;$i++){
	$id=@mysql_result($result, $i,"id");
	$name=@mysql_result($result, $i,"name");
	$txt=@mysql_result($result, $i,"txt");
	$en=@mysql_result($result, $i,"en");

	//$tt="";
	//onClick="showmod3(1,'.$id.');"';
	$tt='<a>';
	$tt2="style='background:#FF0000;' >СКОРО";
	if ($en==1){
		
		$tt2='>ПОДРОБНЕЕ';
		$tt='<a href="/?cat=game&id='.$id.'">';
		
	}
	
//class="game-item--img"
	echo '<div class="game-item">
	'.$tt.'
                  <div >
				  
                    <div class="border"><span></span><span>
					</span><span></span><span></span></div>
					
					<div class="zooma">
					<img src="images/icons/gameicons/gicon'.$id.'.jpg" width=129px height=129px>
					
					</div>
					
                  </div>
                  <p>'.$name.'</p>
				  	<button type="submit" '.$tt2.'</button>
				  </a>
                </div>
				';
	
	
}
 

echo '              </div>
            </div>
          </div>
        </div>
		
	';

?>