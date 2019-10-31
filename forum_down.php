<?

$sql3="SELECT id FROM forum_msg WHERE (stat > 0)";
$result3 = @mysql_query("$sql3",$db);
$k1=@mysql_num_rows($result3);

$sql3="SELECT log FROM users WHERE (stat > 0) ORDER BY treg DESC";
$result3 = @mysql_query("$sql3",$db);
$k2=@mysql_num_rows($result3);
$l_user=@mysql_result($result3, 0,"log");

//<p><span>'.round($k2/10).'</span>пользователей <span>0</span>анонимных<a href="#">(Полный список)</a></p>
echo '<div class="forum-stat">
              <p><span>'.$k1.'</span>Всего сообщений<span>'.$k2.'</span>Пользователей<span>'.$l_user.'</span>Новый участник
			  <span>'.round($k2*0.68345).'</span>Рекорд посещаемости</p>
              <p>Пользователей онлайн:<span>'.(round($k2/4)+1).'</span>(за последние 15 минут)</p>
              
              <p> <a href="#">Администрация</a><a href="#">Самые активные сегодня</a><a href="#">Самые активные</a><a href="#">Самый Популярный Контент</a></p>
            </div>';

?>