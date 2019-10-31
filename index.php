<?
include "conf.php";

include "init.php";
//print_r($_SESSION);
include "header.php";
//print_r($_SESSION);

echo '    <div class="wrapper">
      <div class="content">';
	  
include $str.".php";

      echo '</div>
    </div>';
//print_r($_SESSION);
	include "footer.php";
   
?>