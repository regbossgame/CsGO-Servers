<?
$fk_merchant_id = '45078'; //merchant_id ID мазагина в free-kassa.ru http://free-kassa.ru/merchant/cabinet/help/
$fk_merchant_key = 'a36315rk9'; //Секретное слово http://free-kassa.ru/merchant/cabinet/profile/tech.php

if (isset($_GET['prepare_once'])) {
    $hash = md5($fk_merchant_id.":".$_GET['oa'].":".$fk_merchant_key.":".$_GET['l']);
    echo '<hash>'.$hash.'</hash>';
    exit;
}
?>

<h2>Оплата через <a href="http://wwww.free-kassa.ru">free-kassa.ru</a></h2>
<div id="error"></div>
<form method=GET action="http://www.free-kassa.ru/merchant/cash.php">
    <input type="hidden" name="m" value="<?=$fk_merchant_id?>">
    <input type="text" name="oa" id="sum" id="oa" > Введите сумму для оплаты
    <input type="hidden" name="s" id="s" value="0">
    <br>
    <input type="text" name="o" id="desc" value="" > Номер заявки*
    <br>
    <input type="submit" id="submit" value="Оплатить">
</form>

