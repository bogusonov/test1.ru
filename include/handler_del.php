<?php
if($_SERVER["REQUEST_METHOD"] == "GET")
{
define('db_test', true);
include("../include/db_connect.php");
include("../functions/functions.php");

if (  !empty( $_GET['id'] )  )
{
  $id = $_GET['id'];
}
mysql_query("DELETE FROM persons WHERE id = $id", $link);
echo "Удаление успешно!";
}
?>
