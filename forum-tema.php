<?


include "check_img.php";

$tema=$_GET["id"];

if ($_SESSION["ab7d".$tema]!=date("d-m-Y",time())){
	$_SESSION["ab7d".$tema]=date("d-m-Y",time());
	$sql="UPDATE forum_tema SET kols=kols+1 WHERE id LIKE '$tema'";
	$result = @mysql_query("$sql",$db);
}

echo '		<div class="container"> 
          <div class="forum-content">
            <h2> <span>Ф</span>ОРУМ</h2>
            <ul class="link-panel">
              <li class="active"><a href="/?cat=forum">Форум</a></li>
              <li><a href="/?cat=forum-users">Пользователи</a></li>
              <li><a href="/?cat=forum-mymsg">Мои публикации</a></li>
              <li><a href="/?cat=forum-lastmsg">Новые публикации</a></li>
            </ul>
            <div class="forum-content-container">';

$sql="SELECT id,name FROM forum_tema WHERE id LIKE '$tema' AND (stat > 0)";
$result = @mysql_query("$sql",$db);
$k=@mysql_num_rows($result);
$i=0;
	$id_r=@mysql_result($result, $i,"id");
	$name_r=@mysql_result($result, $i,"name");
	//$user_r=@mysql_result($result, $i,"user");
	//$user_id_r=@mysql_result($result, $i,"user_id");
	//$treg_r=@mysql_result($result, $i,"treg");
			
			   echo '<div class="forum-item">
                <div class="fitem-header">'.$name_r.'</div>
                ';
                  
$sql2="SELECT id,user,user_id,txt,treg FROM forum_msg WHERE tema LIKE '$id_r' AND (stat > 0) ORDER BY treg ASC";
$result2 = @mysql_query("$sql2",$db);
$k2=@mysql_num_rows($result2);
for($i2=0;$i2<$k2;$i2++){
	$id=@mysql_result($result2, $i2,"id");
	
	$user=@mysql_result($result2, $i2,"user");
	$user_id=@mysql_result($result2, $i2,"user_id");
	$txt=@mysql_result($result2, $i2,"txt");
	$treg=@mysql_result($result2, $i2,"treg");
				   
				   
//$stat=$_SESSION["stat"];

				   $aid=$user_id;
				  include "chimg.php";
				  echo '
				  
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
					  ';
					  
					if ($prav>=10){echo '<u><b><a href="delmsg.php?id='.$id.'">-=УДАЛИТЬ СООБЩЕНИЕ=-</a></b></u>';}
					
					echo '</div>
                  </div>
                </div>
                  ';
}

include "check_img.php";

$et="Комментарий";
$en="";
if ($log==""){$en=" disabled";$et="Добавлять сообщения могут только зарегистрированные пользователи!";}
echo '
<div class="fitem-record-block">
                  <div class="user-info">
                    <div class="user-img">
                      <div class="border"><span></span><span></span><span></span><span></span></div>
					  <img src="images/icons/usericon/user'.$img.'.jpg">
                    </div>
                    <h4>'.$_SESSION["log"].' </h4>
                    <p>Доп. информация 
                      <div class="record-content"></div>
                    </p>
                  </div>
                  <div class="record-content">
                    <div class="record-autor">Сегодня '.date('d.m.Y (H:i)').'</div>
                    <form class="record-tetx" action="addmsg.php" method="POST">
                      <textarea style="color:#FFFFFF;overflow:hidden;"placeholder="'.$et.'" name="txt" maxlength="2500"'.$en.' onfocus="if (this.placeholder==\'Комментарий\')this.placeholder=\'\'" onblur="if (this.value==\'\')this.placeholder=\'Комментарий\'"></textarea>
					  <input type="hidden" name="id" value="'.$id_r.'"/>
                      <button>ОТПРАВИТЬ</button>
					  ';
					  
					  
					  
                    echo '</form>
                  </div>
                </div>
';


              echo '
            </div>
            </div>
            ';
            
			include "forum_down.php";
			
          echo '
          </div>
        </div>';

?>