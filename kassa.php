<?
session_start();

$sum=$_POST["sum"];
$id=$_POST["id"];

echo "К оплате <u>".$sum."</u> руб.<br>";
echo '
<table border=0><tr>
<td>Яндекс.деньги</td>
<td>
<iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/quickpay/button-widget?account=41001430842756&quickpay=small&yamoney-payment-type=on&button-text=01&button-size=m&button-color=orange&targets=%D0%97%D0%B0%D0%BA%D0%B0%D0%B7&default-sum='.$sum.'&mail=on&successURL=http%3A%2F%2Forochiplay.ru%2Fpay.php?id='.$id.'" width="188" height="36"></iframe>
</td></tr>
<tr>
<td>Visa/MasterCart</td>
<td>
<iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/quickpay/button-widget?account=41001430842756&quickpay=small&any-card-payment-type=on&button-text=01&button-size=m&button-color=orange&targets=%D0%97%D0%B0%D0%BA%D0%B0%D0%B7&default-sum='.$sum.'&mail=on&successURL=http%3A%2F%2Forochiplay.ru%2Fpay.php?id='.$id.'" width="188" height="36"></iframe>
</td></tr>
<tr>
<td>Мобильные деньги</td>
<td>
<iframe frameborder="0" allowtransparency="true" scrolling="no" src="https://money.yandex.ru/quickpay/button-widget?account=41001430842756&quickpay=small&mobile-payment-type=on&button-text=01&button-size=m&button-color=orange&targets=%D0%97%D0%B0%D0%BA%D0%B0%D0%B7&default-sum='.$sum.'&mail=on&successURL=http%3A%2F%2Forochiplay.ru%2Fpay.php?id='.$id.'" width="188" height="36"></iframe>
</td></tr>
</table>
	';
?>