<?

echo '		<div class="container"> 
          <div class="forum-content">
            <h2> <span>Ф</span>ОРУМ</h2>
            <ul class="link-panel">
              <li class="active"><a href="#">Форум</a></li>
              <li><a href="/?cat=forum-users">Пользователи</a></li>
              <li><a href="/?cat=forum-mymsg">Мои публикации</a></li>
              <li><a href="/?cat=forum-lastmsg">Новые публикации</a></li>
            </ul>
            <div class="forum-content-container">';

$sql="SELECT id,name,user,treg FROM forum_razdel WHERE (stat > 0)";
$result = @mysql_query("$sql",$db);
$k=@mysql_num_rows($result);
for($i=0;$i<$k;$i++){
	$id_r=@mysql_result($result, $i,"id");
	$name_r=@mysql_result($result, $i,"name");
	$user_r=@mysql_result($result, $i,"user");
	//$user_id_r=@mysql_result($result, $i,"user_id");
	$treg_r=@mysql_result($result, $i,"treg");
			
			   echo '<div class="forum-item">
                <div class="fitem-header">'.$name_r.' <span style="font-size:9pt;color:#bebebe;">Автор: '.$user_r.' '.date('d.m.Y',$treg_r).'</span></div>
                <table>';
                  
$sql2="SELECT id,name,user,user_id,treg,kols,last,lreg FROM forum_tema WHERE razdel LIKE '$id_r' AND (stat > 0)";
$result2 = @mysql_query("$sql2",$db);
$k2=@mysql_num_rows($result2);
for($i2=0;$i2<$k2;$i2++){
	$id_t=@mysql_result($result2, $i2,"id");
	$name_t=@mysql_result($result2, $i2,"name");
	$user_t=@mysql_result($result2, $i2,"user");
	$user_id_t=@mysql_result($result2, $i2,"user_id");
	$treg_t=@mysql_result($result2, $i2,"treg");
	$prosm=@mysql_result($result2, $i2,"kols");
	$last=@mysql_result($result2, $i2,"last");
	$lreg=@mysql_result($result2, $i2,"lreg");
	
$sql3="SELECT id FROM forum_msg WHERE tema LIKE '$id_t' AND (stat > 0)";
$result3 = @mysql_query("$sql3",$db);
$k3=@mysql_num_rows($result3);
				  
				  
				  $aid=$user_id_t;
				  include "chimg.php";
				  echo '
				  
				  <tr>
                    <td> <a href="/?cat=forum-tema&id='.$id_t.'">
                        <p>'.$name_t.'</p>
                        <p class="autor">Обновил '.$last.' , '.date('d.m.Y (H:i)',$lreg).'</p></a></td>
                    <td>
                      <p>'.$prosm.' Просмотров</p>
                      <p>'.$k3.' Ответов</p>
                    </td>
                    <td><img src="images/icons/usericon/user'.$img.'.jpg"></td>
                    <td> 
                      <p>Автор: <span>'.$user_t.'</span></p>
                      <p>'.date('d.m.Y',$treg_t).'</p>
                    </td>
                  </tr>
                  ';
}


                echo '
				</table>
              </div>';
}
              echo '
            </div>
            ';
            
			include "forum_down.php";
			
          echo '
          </div>
        </div>';

?>