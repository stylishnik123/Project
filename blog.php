<?php include("main.php");
?>
        <div id="right_div1">
          <p class="fld rp_p_sun1">
		  <img src="images/decoration/1.jpg" width="526" height="380" />

 </p>
        		 
		  <?php

include("config.php");
$sql=mysql_query("select * from events order by id desc limit 0,2");
while($sql2=mysql_fetch_array($sql))
{

echo  "<p id='blg1'>".$sql2['name']."</p>"."<br>";
echo  "<p  id='blg2'>".$sql2['description']."</p>"."<br>";

}
?> 
          </div>
      </div>
<?php include("footr2.php");
?>
