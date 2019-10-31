<?
$log=$_SESSION["log"];

//background:#fbac03;
echo '
<body>
    <header>
	
	';
echo "<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-78412962-2', 'auto');
  ga('send', 'pageview');

</script>

";	
/*
echo '<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter42150729 = new Ya.Metrika({
                    id:42150729,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/42150729" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->';
  */   
	 
echo '
<!— Yandex.Metrika counter —> 
<script type="text/javascript"> 
(function (d, w, c) { 
(w[c] = w[c] || []).push(function() { 
try { 
w.yaCounter42150729 = new Ya.Metrika({ 
id:42150729, 
clickmap:true, 
trackLinks:true, 
accurateTrackBounce:true, 
webvisor:true 
}); 
} catch(e) { } 
}); 

var n = d.getElementsByTagName("script")[0], 
s = d.createElement("script"), 
f = function () { n.parentNode.insertBefore(s, n); }; 
s.type = "text/javascript"; 
s.async = true; 
s.src = "https://mc.yandex.ru/metrika/watch.js"; 

if (w.opera == "[object Opera]") { 
d.addEventListener("DOMContentLoaded", f, false); 
} else { f(); } 
})(document, window, "yandex_metrika_callbacks"); 
</script> 
<noscript><div><img src="https://mc.yandex.ru/watch/42150729" style="position:absolute; left:-9999px;" alt="" /></div></noscript> 
<!— /Yandex.Metrika counter —>
';	 

echo "

<!— BEGIN JIVOSITE CODE {literal} —>
<script type='text/javascript'>
(function(){ var widget_id = 'uqz5OZiBvu';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!— {/literal} END JIVOSITE CODE —>
";

	 echo '
	 
	 
	 


<div id="buy_mod" style="position:fixed;z-index:100;left:25%;top:25%;width:50%;display:none;"></div>';
/*
<form class="autblock" action="tocart.php" method="POST">
<div class="container" style="padding:10px;color:#FFFFFF;text-align:left;background:#3e4061;outline:10px solid rgba(255,255,255,.2);padding:10px;">

<div style="float:right;cursor:pointer;margin-left:10px;margin-top:-10px;padding:5px;color:#FFFFFF;" onClick="showmod(0,0);">X</div>
<div id="name"><img src="images/loading.gif" width=50px><br></div>
 <br>
 <br>
 <div style="font-size:11pt;" id="zen">.</div>
 <select id="slots" name="slots" style="width:100px;" onchange="calc();">
 <option selected>загрузка...</option>
 </select>
 <select id="ticks" name="ticks" style="width:100px;" onchange="calc();">
 <option selected value="128">tickrate: 128</option>
 <option value="64">tickrate: 64</option>
 </select>
 <select id="srok" name="srok" style="width:100px;" onchange="calc();">
 <option selected value="1">30 дней</option>
 <option value="3">90 дней</option>
 <option value="6">180 дней</option>
 <option value="12">360 дней</option>
 </select>
 
 <span id="rzen" style="color:#fbac03;">...</span>
 
 
            
			<input type="hidden" id="buyid" name="buyid" value="-1"/>
			
			<div class="autblock--item" style="float:right;">
			<input type="submit" value=" упить"/>
			</div>
			<br>
			<br>
			
 
 </div>
 </form>
</div>
';

*/

echo '<div style="position:absolute;left:0px;top:0px;z-index:1;"><a href="//www.free-kassa.ru/"><img src="//www.free-kassa.ru/img/fk_btn/16.png"></a></div>';
//<div style="padding:10px;color:#FFFFFF;text-align:left;background:#3e4061;outline:10px solid rgba(255,255,255,.2);padding:10px;">	  
$msg=$_GET["msg"];
if ($log==""){

echo '<div id="reg_form" style="position:fixed;z-index:100;left:35%;top:25%;width:30%;';
if ($msg==""){echo 'display:none;">';}else{echo 'display:block;">';}
echo '
<form class="autblock" action="adduser.php" method="POST">
<div class="container" style="padding:10px;color:#FFFFFF;text-align:left;background:#3e4061;outline:10px solid rgba(255,255,255,.2);padding:10px;width:360px;">
';
$re="showmod2(0);";
if ($msg!=""){$re="self.location='index.php'";}
echo '<div style="float:right;cursor:pointer;margin-left:10px;margin-top:-10px;padding:5px;color:#FFFFFF;" onClick="'.$re.'">X</div>
';
echo '<center>
<br>';

if ($msg==""){
echo '<table border=0 style="font-size:11pt;">
			<tr height=30px><td width=150px>
              <label>Ваш логин</label>
			  </td>
			  <td>
              <input type="text" id="rlogin" name="login" maxlength="15" style="width:135px;"/>
			  </td>
			  </tr>
			  
			  
			<tr height=30px><td>
              <label>Ваш e-mail</label>
			  </td><td>
              <input type="text" id="remail" name="email" maxlength="50" style="width:135px;">
            </td><tr>
			<tr height=30px><td>
              <label>Пароль</label>
			  </td><td>
              <input type="password" id="rpass" name="pass" maxlength="50" style="width:135px;">
            </td></tr>
			
            <tr height=30px><td>
              <label>Повторите пароль</label>
              </td><td>
			  <input type="password" id="rpass2" style="width:135px;" onBlur="chpass();">
            </td></tr>
			
			<tr height=30px><td>
              <label>Ваше имя</label>
			  </td>
			  <td>
              <input type="text" id="rname" name="name" maxlength="15" style="width:135px;"/>
			  </td>
			  </tr>
			
			<tr height=30px>
			<td> </td><td>
			<div class="autblock--item" style="float:right;">
			<input type="submit" id="rbtn" value="РЕГИСТРАЦИЯ" style="width:135px;"/>
			</div>
			</td></tr>
			</table>';
}

if ($msg=="ok"){
	echo '<br>Регистрация прошла успешно!<br><br>';
	
}

if ($msg=="error2"){
	echo '<br>Не верный логин/пароль!<br><br>';
	
}


if ($msg=="error"){
	echo '<br>В регистрации отказано!<br><br>';
	
}

if ($msg=="error_usr"){
	echo '<br>В регистрации отказано!<br>Пользователь с таким логинов уже существует.<br><br>';
	
}

			echo '</center>
			<br>

			
 
 </div>
 </form>
</div>
';
}

echo '<div id="game_info" style="position:fixed;z-index:100;left:20%;top:10%;width:60%;display:none;">';
echo '
<form class="autblock" action="#" method="POST">
<div class="container" style="padding:10px;color:#FFFFFF;text-align:left;background:#3e4061;outline:10px solid rgba(255,255,255,.2);padding:10px;width:550px;">
';

echo '<div style="float:right;cursor:pointer;margin-left:10px;margin-top:-10px;padding:5px;color:#FFFFFF;" onClick="showmod3(0,0);">X</div>
<div id="game_info_cnt" style="height:450px;">Loading...</div>

</div>
</form>
</div>';
/*
	<div class="autblock--item">
			<input type="button" value="ƒќЅј¬»“№ ¬  ќ–«»Ќ”" style="width:165px;height:30px;font-size:9pt;"/>
			</div><br><br>
*/
	  
	  echo '<div class="container">';
       
	   if ($log==""){
		   echo '<form class="autblock" method="POST" action="auth.php">
          <div class="autblock--item" >
            <input type="text" name="login" maxlength="15"/>
          </div>
          <div class="autblock--item">
            <input type="password" name="pass" maxlength="50"/>
          </div>
          <div class="autblock--item">
            <input type="submit" value="войти"/>
          </div>
		  <div class="autblock--item">
            <input type="button" value="регистраци¤" style="width:100px;" onClick="showmod2(1);"/>
          </div>
	   </form>';}else{
		   echo '<div class="autblock">
		   <div class="autblock--item">
            <a href="/?cat=lk"><span style="color:#ff9900;">'.$log.'</span></a>
          </div>
          <div class="autblock--item" style="color:#FFFFFF;">
            '.$_SESSION["myname"].'
          </div>
          <div class="autblock--item">
            <a href="exit.php"><input type="submit" value="выйти"/></a>
          </div></div>';
		   
	   }
	   
        echo '<a href="/">
		<div class="nav-container">
          <div class="logo">
            <div class="logo--img">
              <img src="images/logo.png" height=34px style="padding-left:20px;padding-top:2px;"/>
            </div>
            <div class="logo--text">
              <p>Сервис по продаже </p>
              <p>игровых серверов</p>
            </div>
          </div></a>
		  ';
		  
		  include "men.php";
      //<img src="images/banner/banner-'.$str.'.jpg" alt="banner-'.$str.'"/>    
        echo '</div></div>';
		if ($str=="main" || $str=="games"){echo '
	  <br>
	  <br>
	  <br>
	  <div class="banner-block"> 
	  <center>
	  <div style="width:1000px;height:430px;">
	  <ul class="bxslider">
	    <li><img src="images/banner/banner1.jpg" /></li>
		<li><img src="images/banner/banner2.jpg" /></li>
		<li><img src="images/banner/banner3.jpg" /></li>
	  </ul>
	  </div>
	  </center>
	  </div>
		';}else{echo '	  <div class="banner-block"> <img src="images/banner/banner-'.$str.'.jpg" alt="banner-'.$str.'"/>  </div>';}
	  
    echo '</header>
	';
	  
	  
?>