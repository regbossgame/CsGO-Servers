<?


include "check_img.php";


echo '		<div class="container"> 
          <div class="forum-content">
            <h2> <span>Ф</span>ОРУМ</h2>
            <ul class="link-panel">
			  <li><a href="/?cat=forum"><a href="/?cat=forum">Форум</a></li>
              <li><a href="/?cat=forum-users">Пользователи</a></li>
              <li><a href="/?cat=forum-mymsg">Мои публикации</a></li>
              <li class="active"><a href="#">Новые публикации</a></li>
			  </ul>
            <div class="forum-content-container">';


			   echo '<div class="forum-item"><table>';
               
		$sql2="SELECT id,name,user,user_id,treg,last,lreg,kols FROM forum_tema WHERE (stat > 0) ORDER BY lreg DESC";
$result2 = @mysql_query("$sql2",$db);
$k2=@mysql_num_rows($result2);
for($i2=0;$i2<$k2;$i2++){
	$id_t=@mysql_result($result2, $i2,"id");
	$name_t=@mysql_result($result2, $i2,"name");
	$user_t=@mysql_result($result2, $i2,"user");
	$user_id_t=@mysql_result($result2, $i2,"user_id");
	$treg=@mysql_result($result2, $i2,"treg");
	$last=@mysql_result($result2, $i2,"last");
	$lreg=@mysql_result($result2, $i2,"lreg");
	$prosm=@mysql_result($result2, $i2,"kols");	

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
                      <p>'.date('d.m.Y',$treg).'</p>
                    </td>
                  </tr>
                  ';
	
/*	
echo '<a href="/?cat=forum-tema&id='.$id_t.'" class="right-column--item">
                  <h4><span>'.$name_t.'</span> </h4>
				  <p>Автор '.$user_t.', '.date('d.m.Y (H:i)',$treg).'</p>
				  <p>Обновил '.$last.', '.date('d.m.Y (H:i)',$lreg).'</p></a>
				';

*/				
	}
		
	

				 
				 /*                  
$sql2="SELECT id,user,tema,user_id,txt,treg FROM forum_msg WHERE user_id LIKE '$uid' AND (stat > 0) AND (treg>".(time()-3600*24).") ORDER BY treg DESC";
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

*/

              echo '</table>
            </div>
            </div>';
            
			include "forum_down.php";
			
          echo '</div>
        </div>';

?>