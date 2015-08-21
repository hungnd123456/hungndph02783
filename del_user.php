<?php
$conn=mysql_connect("localhost","root","admin@111") or die("can't connect this database");
mysql_select_db("root",$conn);
$id=$_GET['userid'];
$sql="delete from user where id='".$id."'";
mysql_query($sql);
header("location:manage_user.php");
exit();
?>