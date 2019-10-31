<?


include "check_img.php";


echo '		<div class="container"> 
          <div class="forum-content">
            <h2> <span>Ф</span>ОРУМ</h2>
            <ul class="link-panel">
			  <li><a href="/?cat=forum"><a href="/?cat=forum-users">Форум</a></li>
              <li><a href="/?cat=forum-users">Пользователи</a></li>
              <li class="active"><a href="#">Мои публикации</a></li>
              <li><a href="/?cat=forum-lastmsg">Новые публикации</a></li>
			  </ul>
            <div class="forum-content-container">';


			   echo '<div class="forum-item">
                 ';
                  
$sql2="SELECT id,user,tema,user_id,txt,treg FROM forum_msg WHERE user_id LIKE '$uid' AND (stat > 0) ORDER BY treg DESC";
$result2 = @mysql_query("$sql2",$db);
$k2=@mysql_num_rows($result2);
for($i2=0;$i2<$k2;$i2++){
	$id=@mysql_result($result2, $i2,"id");
	
	$user=@mysql_result($result2, $i2,"user");
	$user_id=@mysql_result($result2, $i2,"user_id");
	$txt=@mysql_result($result2, $i2,"txt");
	$treg=@mysql_result($result2, $i2,"treg");
	$tema=@mysql_result($result2, $i2,"tema");
				   
				   $aid=$user_id;
				  include "chimg.php";
				  echo '
				  <a href="/?cat=forum-tema&id='.$tema.'">
				  <div class="fitem-record-block">
                  <div class="user-info">
                    <div class="user-img">
                      <div class="border"><span></span><span></span><span></span><span></span></div>
					  <img src="images/icons/usericon/user'.$img.'.jpg">
                    </div>
                    <h4>'.$user.' </h4>
                    <p>Доп. информация 
                      <div class="record-content"></div>
                    </p>
                  </div>
                  <div class="record-content">
                    <div class="record-autor">Отправлено '.date('d.m.Y (H:i)',$treg).'</div>
                    <div class="record-tetx">
                      <p>'.$txt.'</p>
                    </div>
                  </div>
                </div>
				</a>
                  ';
}



              echo '
            </div>
            </div>
            ';
            
			include "forum_down.php";
			
          echo '
          </div>
        </div>';

?>