<?php include("main.php");
?>
<?php
include("config.php");
 $username=$_POST['user'];
 $password=$_POST['pass'];
$valid=mysql_query("insert into login(username,password) values
('$username','$password')");
if($valid)
{
echo "<p id='msg'>Welcome</p>";
}
else
{
echo "Please Try Again";
}
?>
<?php include("footr2.php");
?>