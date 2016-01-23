<?php
session_start();
error_reporting(0);
require_once("../connect.php");

if(isset($_SESSION['stuid']))
{
$stuid=strip_tags($_SESSION['stuid']);

echo "s";
if(isset($_POST['stuname']) && isset($_POST['gender']) && isset($_POST['branch']) && isset($_POST['cls']) && isset($_POST['year']) && isset($_POST['dorm']) && isset($_POST['mobile']))
{
$stuname=mysql_real_escape_string(strip_tags($_POST['stuname']));
$gender=mysql_real_escape_string(strip_tags($_POST['gender']));
$branch=mysql_real_escape_string(strip_tags($_POST['branch']));
$cls=mysql_real_escape_string(strip_tags($_POST['cls']));
$year=mysql_real_escape_string(strip_tags($_POST['year']));
$dorm=mysql_real_escape_string(strip_tags($_POST['dorm']));
$mobile=mysql_real_escape_string(strip_tags($_POST['mobile']));

$ip=$_SERVER['REMOTE_ADDR'];

$datch=mysql_query("SELECT * FROM userdata WHERE stuid='$stuid'");
if(mysql_num_rows($datch)<1)
{
mysql_query("INSERT INTO userdata(stuid,name,gender,branch,class,dorm,year,mobile,lastupdate,lastupdateip,noofedits) VALUES('$stuid','$stuname','$gender','$branch','$cls','$dorm','$year','$mobile',NOW(),'$ip','1')") or die(mysql_error());
mysql_query("UPDATE passwords SET datagiven='1' WHERE ID='$stuid'");
}
else
{
mysql_query("UPDATE userdata SET name='$stuname',gender='$gender',branch='$branch',class='$cls',dorm='$dorm',year='$year',mobile='$mobile',lastupdate=NOW(),lastupdateip='$ip',noofedits=noofedits+1 WHERE stuid='$stuid'");
mysql_query("UPDATE passwords SET datagiven='1' WHERE ID='$stuid'");
}
}
}
else
{
echo "Not authorised";
}
?>
