<?php
$con=mysql_connect("localhost","root","");
$conn=mysql_select_db("wedding",$con);
if(!$conn)
{
echo"data base is not connected";
die();
}
else
{
echo"";
}
?>