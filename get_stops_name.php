<?php 
$con = mysql_connect("sql5.freesqldatabase.com", "sql554782", "lN8%yE3!") or die(mysql_error());
mysql_select_db("sql554782", $con);
$r=mysql_query("select Name as name, Latlng as latlong from place",$con);

while($row=mysql_fetch_assoc($r))
{
	$cls[]=$row;
}

print(json_encode($cls));
mysql_close($con);
?>