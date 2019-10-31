<?

//http://www.free-kassa.ru/merchant/cash.php
//test2.php
echo '<div class="container">
          <div class="cart-block"><a name="my-orders"></a>
            <h2> <span>ВАША</span>КОРЗИНА</h2>
            <form class="cart-inner" action="http://www.free-kassa.ru/merchant/cash.php" method="GET">
			
              <div class="cart-scroll">
                <table>
                  <tr>
                    <td></td>
                    <td>Наименование товара</td>
					<td>Слотов</td>
					<td>Срок (дней)</td>
                    <td>Удалить</td>
                    <td>Цена (руб)</td>
                  </tr>';

$log=$_SESSION["log"];

$sql="SELECT id,game_id,game,zen,slots,srok FROM orders WHERE user LIKE '$log' AND stat LIKE '0'";
$result = @mysql_query("$sql",$db);
$k=@mysql_num_rows($result);
$total=0;
$scid="";
for($i=0;$i<$k;$i++){
	$game=@mysql_result($result, $i,"game");
	$zen=@mysql_result($result, $i,"zen");
	$game_id=@mysql_result($result, $i,"game_id");
	$id=@mysql_result($result, $i,"id");
	$slots=@mysql_result($result, $i,"slots");
	$srok=@mysql_result($result, $i,"srok");

	
	
	$total+=$zen;
	$scid.=$id."-";
				  
				  echo '<tr>
                    <td>
                      <div class="cart-img">
                        <div class="border"><span></span><span></span><span></span><span>                                   </span></div>
						<img src="images/icons/gameicons/gicon'.$game_id.'.jpg">
                      </div>
                    </td>
                    <td> '.$game.'</td>
					<td>
                      '.$slots.'
                    </td>
					<td>
                      '.$srok.'
                    </td>
                    <td>
					<div class="cart-butoon">
                      <button style="width:70px;"><a href="delorder.php?id='.$id.'" style="color:#000000;">УДАЛИТЬ</button>
					  </div>
                    </td>
                    <td> '.$zen.'</td>
                  </tr>';
}

$ssi=$scid;
$scid=round($scid/$k)-3312;
	echo '<tr>
                    <td> </td>
                    <td> </td>
					<td> </td>
					<td> </td>
                    <td>К оплате</td>
                    <td><span style="color:#b87214;">'.$total.'</span></td>
                  </tr>';
//<span style="color:#FFFFFF;">Телефон:</span> <input name="customerNumber" value="+7" style="width:100px;"/>

/*
	

				<input name="shopId" value="'.$shopid.'" type="hidden"/>
				<input name="scid" value="'.$scid.'" type="hidden"/>
				<input name="paymentType" value="" type="hidden">
				<input name="customerNumber" value="-" type="hidden"/>
				<input name="cps_phone" value="79110000000" type="hidden"/>
				<input name="cps_email" value="'.$_SESSION['email'].'" type="hidden"/>
	
	*/


$order_id = $scid;
$order_amount = $total;
$sign = md5($merchant_id.':'.$order_amount.':'.$secret_word.':'.$order_id);
	
 
                echo '</table>
              </div>
              <div class="cart-butoon">
			  ';
	//<input type='hidden' name='i' value='1'>		
	echo "
	<input type='hidden' name='m' value='".$merchant_id."'>
    <input type='hidden' name='oa' value='".$order_amount."'>
    <input type='hidden' name='o' value='".$order_id."'>
    <input type='hidden' name='s' value='".$sign."'>
    
    <input type='hidden' name='lang' value='ru'>
    <input type='hidden' name='us_login' value='".$_SESSION['log']."'>
	<input type='hidden' name='us_ords' value='".$ssi."'>
"; 

    
                
				//include "kassa.php";
				//fk_merchant_key
				echo '
				<button><a href="delorder.php?id=-1" style="color:#000000;">ОТЧИСТИТЬ КОРЗИНУ</a></button>
                <button>ОПЛАТИТЬ ЗАКАЗ</button>
              </div>
            </form>
          </div>
        </div>';

?>