<?
$uid=$_SESSION["userid"];

$img=$uid;
if (!file_exists("images/icons/usericon/user".$img.".jpg")){
	$img="_none";
}
?>