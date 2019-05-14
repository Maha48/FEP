<?php
require_once './vendor/autoload.php';
$dotenv = Dotenv\Dotenv::create(__DIR__);
$dotenv->load();

// نستطيع الان قراءة المتغيرات من الملف
$db_host = getenv('DB_host');
$db_username = getenv('DB_username');
$Database=getenv('DB');
echo $db_host;
echo $db_username;
echo $Database;
$Adminusername =$_POST['usernameadmin'];
$Adminpassword=$_POST['passwordadmin'];
$connection=mysqli_connect($db_host,$db_username,"",$Database);
$Username=mysql_real_escape_string($Adminusername);
$Password=mysql_real_escape_string($Adminpassword);
$query=mysqli_query($connection,"select * from Admin where Username=$Adminusername ")
or die ("failed to query database " .mysql_error());

?>