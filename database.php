<?php include("main.php");
?>
<?php
include("config.php");
 $name=$_POST['name'];
 $address=$_POST['address'];
 $contact=$_POST['contact'];
 $city=$_POST['city'];
 $email=$_POST['email'];
 $lang=$_POST['lang'];
 $exp=$_POST['exp'];
 $gender=$_POST['q'];
$valid=mysql_query("insert into carrier(name,address,contact,city,email,language,experience,gender) values
('$name','$address','$contact','$city','$email','$lang','$exp','$gender')");
if($valid)
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