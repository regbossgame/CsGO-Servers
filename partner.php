<?

$id=$_GET["id"];

$sql="SELECT * FROM part WHERE id LIKE '$id'";
$result = @mysql_query("$sql",$db);
//$k=@mysql_num_rows($result);

//for($i=0;$i<$k;$i++){
	$i=0;
	
	$name=@mysql_result($result, $i,"name");
	$name2=@mysql_result($result, $i,"name2");
	$txt=@mysql_result($result, $i,"txt");


echo '        <div class="container">
          <div class="partner-block">
            <h2> <span>НАШИ</span>ПАРТНЕРЫ</h2>
            <div class="partner-inner">
              <div class="img-cont"><img src="media/userfoto/foto'.$id.'.png" alt="'.$name2.'"></div>
              <div class="partner-content">
                <h3> <span>'.$name.'</span>'.$name2.'            </h3>
                '.$txt.'
              </div>
            </div>
          </div>
        </div>';

?>