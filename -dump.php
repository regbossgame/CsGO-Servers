<?
header('Content-Type: text/html; charset=utf-8');
$bde=0;
if ($_GET["pas"]=="wirt"){

$bde=1;
include "bd.php";

include "dump_com.php";

include "dump_games.php";

include "dump_news.php";

include "dump_forum.php";

include "dump_users.php";

include "dump_orders.php";

include "dump_types.php";

include "dump_part.php";

include "dump_comps.php";
	
}else{echo "ќшибка доступа Error 3312";}

?>