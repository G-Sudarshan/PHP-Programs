<?php
//Program to handle ODBC connection with php code
$conn=odbc_connect("mydsn", "", "");
if (odbc_error($conn)) {
	echo "<br><br>Connection fail..";
}
else
{
	echo "<br><br>Connection Success...";
}

echo"<br><br>Inserting data.....";

$q1="INSERT INTO emp_data VALUES(11,'SAK',25000,22,'9874060633')";
$s1="INSERT INTO emp_data VALUES(12,'REK',25000,25,'9874060633')";
$s2="INSERT INTO emp_data VALUES(13,'DFG',25000,29,'9874060633')";
odbc_exec($conn, $s1);
odbc_exec($conn, $s2);
if(odbc_exec($conn, $q1))
{
	echo "<br><br>Data inserted successfully...";
}
else
{
	echo "<br><br>Error for insertion...";
}


$q2="UPDATE emp_data SET emp_name='SHAU' WHERE id=11";
if(odbc_exec($conn, $q2))
{
	echo "<br><br>Data Updated successfully...";
}
else
{
	echo "<br><br>Error for Updation...";
}

$q3="DELETE FROM emp_data WHERE emp_age=22";
if (odbc_do($conn,$q3)) {
	echo "<br><br>Data Deleted successfully...";
}
else
{
	echo "<br><br>Error for Deletion...";
}

echo "<br><br>Reading Employee Data:<br><br>";
$sql="SELECT * FROM emp_data";
$rs=odbc_exec($conn,$sql);
if (!$rs)
  {exit("Error in Reading Data");}
echo "<table><tr>";
echo "<th>ID</th>";
echo "<th>Name</th>";
echo "<th>Salary</th>";
echo "<th>Age</th>";
echo "<th>Mobile No.</th></tr>";
while (odbc_fetch_row($rs))
{
  $ID=odbc_result($rs,"ID");
  $Name=odbc_result($rs,"emp_name");
  $Salary=odbc_result($rs,"emp_salary");
  $Age=odbc_result($rs,"emp_age");
  $Mob=odbc_result($rs,"emp_mobile");
  
  echo "<tr><td>$ID</td>";
  echo "<td>$Name</td>";
  echo "<td>$Salary</td>";
  echo "<td>$Age</td>";
  echo "<td>$Mob</td></tr>";
}
echo "</table>";
odbc_close($conn);

?>
