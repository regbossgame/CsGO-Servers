<?
if ($log==""){HEADER("index.php");die();}
include "check_img.php";

echo '<div class="container">
          <div class="lk-block"><a name="orders"></a>
            <h2> <span>ЛИЧНЫЙ</span>КАБИНЕТ</h2>
            <div class="lk-inner">
              <div class="user-info">
                <h3>Информация</h3>
                <div class="user-img">
                  <div class="border"><span></span><span></span><span></span><span></span></div>
				  <img src="images/icons/usericon/user'.$img.'.jpg">
                </div>
                <h4>'.$_SESSION["myname"].' </h4>
                <ul class="sn">
                  <li><a class="fa fa-facebook"></a></li>
                  <li><a class="fa fa-twitter"></a></li>
                  <li><a class="fa fa-linkedin"></a></li>
                  <li><a class="fa fa-vk"></a></li>
                  <li><a class="fa fa-youtube"></a></li>
                  <li><a class="fa fa-odnoklassniki"></a></li>
                  <li><a class="fa fa-instagram">        </a></li>
                </ul>
                <p>Доп. информация    </p>
              </div>
              <div class="user-task-list">
                <div class="user-task">
                  <div class="task-head"><a href="#" class="openhide task-item"> Мои покупки                             </a></div>
                  <div class="task-scroll-block">';

$mpar=array();

$sql="SELECT * FROM orders WHERE stat LIKE '1' AND user LIKE '$log' ORDER BY game_id,treg DESC";
$result = @mysql_query("$sql",$db);
$k=@mysql_num_rows($result);
for($i=0;$i<$k;$i++){
	$id=@mysql_result($result, $i,"id");
	$game=@mysql_result($result, $i,"game");
	$game_id=@mysql_result($result, $i,"game_id");
	$treg=@mysql_result($result, $i,"treg");
	$srok=@mysql_result($result, $i,"srok");
	$hostname=@mysql_result($result, $i,"hostname");
	$pass=@mysql_result($result, $i,"pass");
	$gpass=@mysql_result($result, $i,"gpass");
	$map=@mysql_result($result, $i,"map");
	
	$inf=@mysql_result($result, $i,"inf");
	$com=@mysql_result($result, $i,"com");
	
	$ip=@mysql_result($result, $i,"ip");
	$port=@mysql_result($result, $i,"port");
	
	$stat=@mysql_result($result, $i,"stat");
	$tick=@mysql_result($result, $i,"tick");
	$entick=@mysql_result($result, $i,"entick");
	
	$gmode=@mysql_result($result, $i,"mode");
	
	$pars=@mysql_result($result, $i,"pars");
	
	//$pars=str_replace("**","\r\n",$pars);

	$pars="-*#".$pars;
	
	$mpar=explode("*#",$pars);
	
	//$t1=$ip.":".$port;
	//if (($ip=="") || ($port==0)){
		$t1="<img src='images/loading.gif' width=30px>";
	//}
	
	if (($ip=="") || ($port==0)){
		$t1="Остановлен";
	}
	
	echo '<script>setTimeout("getinfo('.$id.');",2000);</script>';
	
	$opn=$_GET["opn"];
	
	if (($opn=="")&&($i==0)){$opn=$id;}
	if ($id==$opn){
		echo '<script>setTimeout("openscroll('.$opn.');",500);</script>';
	}
	
$days=$srok-round((time()-$treg)/86400);
				  //if ($i==0){
					  $t2=" id='scroll_".$id."'";
					  //}else{$t2='';}
					echo '<a name="ret_'.$id.'"></a><div class="scroll-item"> 
                      <div class="scroll-item-head"'.$t2.'>
                        <p>'.$game.'</p>
                        <p>'.date("d.m.Y (H:i)",$treg).'/'.date("d.m.Y (H:i)",$treg+$srok*86400).'<i class="fa fa-info-circle">'.$days.'</i> дней</p>
                      </div>
                      <div class="scroll-item-body">
					  <table width=300px>
					  <tr valign="top"><td>';
					  if ($com!=0){$st=" disabled";}else{$st="";}
						  echo '<input type="button" style="margin-right:10px;" id="btn1_'.$id.'" value="Запустить"'.$st.' onClick="setcom(1,'.$id.');"/>';
					  echo '</td>
					  <td>
					  ';
					  if ($com==0){$st=" disabled";}else{$st="";}
						  echo '<input type="button" style="margin-right:10px;" id="btn0_'.$id.'" value="Остановить"'.$st.' onClick="setcom(0,'.$id.');"/>';
					  echo '
					  </td>
					  <td>
					  ';
					  if ($com==2){$st=" disabled";}else{$st="";}
						  echo '<input type="button" style="margin-right:10px;" id="btn2_'.$id.'" value="Перезапустить"'.$st.' onClick="setcom(2,'.$id.');"/>';
					  echo '
					  </td>
					  <td>
					  <span id="inf_'.$id.'">'.$t1.'</span>
					  </td>
					  </tr>
					  </table>
					  <br>
					  
					  <form action="setparams.php" method="POST">
					  <input type="hidden" name="id" value="'.$id.'"/>
					  <table>
					  <tr><td colspan=2><span style="color:#FF0000;">! Измененные параметры вступят в силу после перезапуска сервера</span><br><br></td></tr>
					  ';
					  
					  include "form_".$game_id.".php";
					  
					  echo '
					  
					  <tr><td>
					  </td><td>
					  <input type="submit" value="Сохранить"/>
					  </td>
					  </table>
					  </form>
					  
					  </div>
                    </div>';
}      
//Доп. параметры</td><td><textarea name="pars">'.$pars.'</textarea> (?)
//					  </td></tr><tr><td colspan=2><hr></td></tr>              
					echo '
					</div>
                </div>
                <div class="user-task">
                  <div class="task-head"><a href="#" class="task-item"> УВЕДОМЛЕНИЯ/НОВОСТИ</a></div>
                </div>
                <div class="user-task">
                  <div class="task-head"><a href="#" class="task-item"> МОИ СООБЩЕНИЯ</a></div>
                </div>
                <div class="user-task">
                  <div class="task-head"><a href="#" class="task-item"> МОЯ КОРЗИНА</a></div>
                </div>
                <div class="user-task">
                  <div class="task-head"><a href="#" class="task-item"> МОИ ПУБЛИКАЦИИ                           </a></div>
                </div>
              </div>
            </div>
          </div>
        </div>';

?>