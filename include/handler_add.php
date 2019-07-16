<?php
if($_SERVER["REQUEST_METHOD"] == "POST")
{
define('db_test', true);
include("../include/db_connect.php");
include("../functions/functions.php");

$title = iconv("UTF-8", "UTF-8",clear_string($_POST['add_title']));
$image = iconv("UTF-8", "UTF-8",clear_string($_POST['add_image']));
$job = iconv("UTF-8", "UTF-8",clear_string($_POST['add_job']));
$years = iconv("UTF-8", "UTF-8",clear_string($_POST['add_years']));
$phone = iconv("UTF-8", "UTF-8",clear_string($_POST['add_phone']));

if (!$title) $error[] = "Необходимо указать заголовок!";
if (!$image) $error[] = "Необходимо указать название картинки!";
if (!$job) $error[] = "Необходимо указать должность!";
if (!$years) $error[] = "Необходимо указать возраст!";
if (!$phone) $error[] = "Необходимо указать телефон!";
if (count($error)){
 echo implode('<br />',$error);
}else
{
mysql_query("INSERT INTO persons(title,image,job,years,phone,datetime)VALUES(
'".$title."','".$image."','".$job."','".$years."','".$phone."',NOW())",$link);
$errorr = iconv("utf-8", "windows-1251", mysql_error());
echo $errorr;
echo "Успешное добавление!";
}
}
?>
