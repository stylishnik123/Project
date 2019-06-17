<?php include("main.php");
?>
        <div id="right_div1">
		<div id="hd"><h1  >Build Your Carrier Here</h1></div>
          <p class="fld rp_p_sun3">
		  <div id="box1"><img src="images/rp_img2.jpg" height="380" width="525"></div>
<div id="box2"><img src="images/amn.jpg" height="380" width="525"></div>
<div id="box3"><img src="images/PA222G2.jpg" height="380" width="525"></div>

<script src="jquerynew.js"></script>
<script>
$(document).ready(function(){
$("#box1").mouseover(function(){
$("#box1").fadeIn(5000); $("#box2").fadeIn(5000); $("#box3").fadeIn(5000); $("#box2").fadeOut(5000); 
$("#box1").fadeIn(5000); $("#box2").fadeIn(5000); $("#box3").fadeIn(5000); $("#box2").fadeOut(5000); 
$("#box1").fadeIn(5000); $("#box2").fadeIn(5000); $("#box3").fadeIn(5000); $("#box1").fadeOut(5000); 
$("#box1").fadeIn(5000); $("#box2").fadeIn(5000); $("#box3").fadeIn(5000); $("#box2").fadeOut(5000);
$("#box1").fadeIn(5000); $("#box2").fadeIn(5000); $("#box3").fadeIn(5000); $("#box2").fadeOut(5000);
$("#box1").fadeIn(5000); $("#box2").fadeIn(5000); $("#box3").fadeIn(5000); $("#box3").fadeOut(5000);

$("#box1").fadeIn(5000); $("#box2").fadeIn(5000); $("#box3").fadeIn(5000); $("#box2").fadeOut(5000); 
$("#box1").fadeIn(5000); $("#box2").fadeIn(5000); $("#box3").fadeIn(5000); $("#box2").fadeOut(5000); 
$("#box1").fadeIn(5000); $("#box2").fadeIn(5000); $("#box3").fadeIn(5000); $("#box1").fadeOut(5000); 
$("#box1").fadeIn(5000); $("#box2").fadeIn(5000); $("#box3").fadeIn(5000); $("#box2").fadeOut(5000);
$("#box1").fadeIn(5000); $("#box2").fadeIn(5000); $("#box3").fadeIn(5000); $("#box2").fadeOut(5000);
$("#box1").fadeIn(5000); $("#box2").fadeIn(5000); $("#box3").fadeIn(5000); $("#box3").fadeOut(5000);
$("#box1").fadeIn(5000); $("#box2").fadeIn(5000); $("#box3").fadeIn(5000);
});                                                                   
});
</script>
		  </p>
          <p class="fld rp_fribg2"> 
		  <form method="post" action="database.php" name="form1" onsubmit="return valid()">
<link rel="stylesheet" type="text/css"  href="form4.css" onclick="return valid()">
<table id="form1"  >
<tr>
<td id="left">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; Name:</td><td><input type="text" name="name" id="name" placeholder="Enter name"></td></tr>
<tr><td id="left">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; Address:</td><td><input type="text" name="address" id="name" placeholder="Enter Address"></td></tr>
<tr><td id="left">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; Contact:</td><td><input type="text" name="contact" id="name" placeholder="Enter Contact"></td></tr>
<tr><td id="left">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; City:</td><td><select name="city" id="name">
<option value="0" ><p id="left">select </option></p>
<option value="chandigarh"><p id="left">Chandigarh</option></p>
<option value="Delhi"><p id="left">Delhi</option></p>
<option value="Delhi"><p id="left">Ludhiana</option></p>
<option value="Delhi"><p id="left">Jalandhar</option></p>
<option value="Delhi"><p id="left">Patiala</option></p>
<option value="Delhi"><p id="left">Moga</option></p>
<option value="moga"><p id="left">Anandpur Sahib</option></p></td></tr>
<tr><td id="left">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; Email:</td><td><input type="email" name="email" id="name"placeholder="Enter Email"></td></tr>
<tr><td id="left">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; Language:</td><td><input type="text" name="lang" id="name"placeholder="Enter Languages"></td></tr>
<tr><td id="left">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; Experince:</td><td><input type="text" name="exp" id="name"placeholder="Enter your Experince"></td></tr>
<tr><td id="left">&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; Gender:</td><td><input type="radio" name="q" value="Male" id="nm" >Male
 <input type="radio" name="q" value="Female" >Female</td></tr>
 <tr><td><input type="submit" name="submit"  value="Submit" id="name1"> <input type="reset" name="button" value="Reset"  id="name1" onclick="return valid()"></td></tr>

</table>
</form>

<script language="javascript">
function valid()
{
var a=document.form1.name.value;
if(a=="")
{
alert("please fill your good name");
return false;
}

var b=document.form1.address.value;
if(b=="")
{
alert("please fill your address");
return false;
}

var c=document.form1.Contact.value;
if(c=="")
{
alert("please fill your contact");
return false;
}
if(isNaN (c))
{
alert("contact should be numeric only");
return false;
}

var d=document.form1.city.value;
if(d=="0")
{
alert("please select your city");
return false;
}

var e=document.form1.email.value;
if(e=="")
{
alert("please fill your email");
return false;
}
if(e=="")
{
alert("please fill your email");
return false;
}

var f=document.form1.password.value;
if(f=="")
{
alert("please fill your password");
return false;
}

var pl=f.length;
if(pl<6)
{
alert("your password should be more than 6 characters");
return false;
}

var g=document.form1.cpassword.value;
if(g=="")
{
alert("please fill your confirm password");
return false;
}
if(g!==f)
{
alert("password is not matched");
return false;
}

var count=0;
for(var i=0; i<5;i++)
{
if(document.form1["q"][i].checked)
{
count++;
}
}
if (count<3)
{
alert("please select at least 3 courses");
return false;
}


}
</script>
 </p>
          </div>
      </div>
<?php include("footr2.php");
?>
