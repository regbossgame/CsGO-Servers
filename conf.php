<?

$url=$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
//echo $url."|";
$loc=false;
if (strpos($url,".ru")!=false){$url=str_replace(".ru",".com",$url);$loc=true;}
if (strpos($url,"index.php")!=false){$url=str_replace("index.php","",$url);$loc=true;}
//if (strpos($url,"http://")!=false){$url=str_replace("http://","https://",$url);$loc=true;}
//echo $url;
if ($loc){HEADER("LOCATION: ".$url);}

ini_set('session.gc_maxlifetime', 360000);
ini_set('session.cookie_lifetime', 360000);
session_start();
header('Content-Type: text/html; charset=utf-8');
include "bd.php";

$log=$_SESSION["log"];
$uid=$_SESSION["userid"];
$prav=$_SESSION["prav"];

$fk_merchant_id = '45078'; //merchant_id ID мазагина в free-kassa.ru http://free-kassa.ru/merchant/cabinet/help/
$fk_merchant_key = '36315rk9'; //Секретное слово http://free-kassa.ru/merchant/cabinet/profile/tech.php

$merchant_id = '45078';
$secret_word = '36315rk9';




//echo "|".$prav;

if ($log!=""){
$sql="UPDATE users SET last='".time()."', ip='".$mip."' WHERE log LIKE '".$log."'";
$result = @mysql_query("$sql",$db);
}


function check_txt($txt)
{
$txt=str_replace("<","[",$txt);
$txt=str_replace(">","]",$txt);
$txt=str_replace("'",'"',$txt);

    return $txt;
}

$shopid="151";

$mtit=array();
$mlink=array();
$mena=array();

$j=0;
$mtit[$j]="ИГРЫ";
$mlink[$j]="games";
$mena[$j]=1;

//$j++;
//$mtit[$j]="МАГАЗИН";
//$mlink[$j]="shop";
//$mena[$j]=1;

$j++;
$mtit[$j]="ФОРУМ";
$mlink[$j]="forum";
$mena[$j]=1;
$j++;
$mtit[$j]="О НАС";
$mlink[$j]="about-us";
$mena[$j]=1;
$j++;
$mtit[$j]="НАШИ ПАРТНЕРЫ";
$mlink[$j]="partners";
$mena[$j]=1;
$j++;
$mtit[$j]="КОРЗИНА";
$mlink[$j]="cart";
$mena[$j]=1;
$j++;

$mtit[$j]="F.A.Q";
$mlink[$j]="faq";
$mena[$j]=1;
$j++;


$men_count=$j;

$mname="OrochiPlay - ";

$tit=array();
$tit["games"]=$mname."ИГРЫ";
$tit["main"]=$mname."аренда игровых серверов";
$tit["shop"]=$mname."МАГАЗИН";
$tit["forum"]=$mname."ФОРУМ";
$tit["about-us"]=$mname."О НАС";
$tit["faq"]=$mname."F.A.Q";
$tit["partners"]=$mname."НАШИ ПАРТНЕРЫ";
$tit["cart"]=$mname."КОРЗИНА";
$tit["partner"]=$mname."ИНФОРМАЦИЯ О ПАРТНЕРЕ";

$str=$_GET["cat"];
if ($str==""){$str="main";}

?>