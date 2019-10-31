<?

echo '		<div class="container"> 
          <div class="forum-content">
            <h2> <span>Ф</span>ОРУМ</h2>
            <ul class="link-panel">
			  <li><a href="/?cat=forum">Форум</a></li>
              <li class="active"><a href="#">Пользователи</a></li>
              <li><a href="/?cat=forum-mymsg">Мои публикации</a></li>
              <li><a href="/?cat=forum-lastmsg">Новые публикации</a></li>
            </ul>
            <div class="forum-content-container">';

			echo '<div class="forum-item">
                ';

$sql="SELECT id,log,name,treg,last FROM users WHERE (stat > 0) ORDER BY last DESC";
$result = @mysql_query("$sql",$db);
$k=@mysql_num_rows($result);
for($i=0;$i<$k;$i++){
	$id=@mysql_result($result, $i,"id");
	$name=@mysql_result($result, $i,"name");
	$loga=@mysql_result($result, $i,"log");
	$treg=@mysql_result($result, $i,"treg");
	$last=@mysql_result($result, $i,"last");

	$aid=$id;
				  include "chimg.php";
				  echo '
				  
				  <div class="fitem-record-block">
                  <div class="user-info">
                    <div class="user-img">
                      <div class="border"><span></span><span></span><span></span><span></span></div>
					  <img src="images/icons/usericon/user'.$img.'.jpg">
                    </div>
                    <h4>'.$loga.'<br>'.$name.' </h4>
                    <p>Доп. информация 
                      <div class="record-content"></div>
                    </p>
                  </div>
                  <div class="record-content">
                    <div class="record-autor">Зарегистрирован '.date('d.m.Y (H:i)',$treg).'
					<br>
					Последний вход '.date('d.m.Y (H:i)',$last).'
					</div>
                    <div class="record-tetx">
                      
                    </div>
                  </div>
                </div>
                  ';


}
echo'  </div>';

              echo '
            </div>
            ';
            
			include "forum_down.php";
			
          echo '
          </div>
        </div>';

?>