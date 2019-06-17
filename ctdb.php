<?php include("main.php");
?>
<?php
include("config.php");
 $name=$_POST['name'];
 $email=$_POST['email'];
 $phoneNumber=$_POST['ph'];
 $yourQuerry=$_POST['area'];
$q=mysql_query("insert into contacts(Name,Email,PhoneNumber,YourQuerry) values
('$name','$email','$phoneNumber','$yourQuerry ')");
if($q)
{
echo "<p id='msg'>Your Contact Has Been Added SuccessFully!! We Will Contact You Soon</p>";
}
else
{
echo "Try Again";
}
?>
<?php include("footr2.php");
?>