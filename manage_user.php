<center> <h1> List Member </h1> </center>
<table align='center' width='400' border='1'>
<tr>
<td>STT</td>
<td>Username</td>
<td>Level</td>
<td>Edit</td>
<td>Del</td>
</tr>
<?php
$conn=mysql_connect("localhost","root","admin@111") or die("can't connect this database");
mysql_select_db("root",$conn);
$sql="select * from user order by id DESC";
$query=mysql_query($sql);
if(mysql_num_rows($query) == "")
{
echo "<tr><td colspan=5 align=center>Chua co username nao</td></tr>";
}
else
{
$stt=0;
while($row=mysql_fetch_array($query))
{
$stt++;
echo "<tr>";
echo "<td>$stt</td>";
echo "<td>$row[username]</td>";
if($row['level'] == "1")
{
echo "<td>Member</td>";
}
else
{
echo "<td>Admin</td>";
}
echo "<td><a href='edit_user.php?userid=$row[id]'>Edit</a></td>";
echo "<td><a href='del_user.php?userid=$row[id]'>Del</a></td>";
echo "</tr>";
} 
}
?>
</table>