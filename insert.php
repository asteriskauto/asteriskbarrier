<?PHP
$host = "localhost";
$user = "root";
$database = "barrier";
$pass = "password";
$name = $_POST["namee"];
$phone = $_POST["phonee"];
// коннектимся к бд
$connect = mysql_connect($host, $user, $pass);
mysql_select_db($database);
mysql_set_charset( 'utf8' );
mysql_query("INSERT INTO `numbers` (`phone`, `name`) VALUES ('".$name."','".$phone."')");
mysql_close($connect);
?>
<input type="button" value="Назад" onclick="history.back()">
