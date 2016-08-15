<?php
$q=$_GET["q"];

$con = mysql_connect('localhost', 'root', 'root');
if (!$con)
{
    die('Could not connect: ' . mysql_error());
}

mysql_select_db("AJAX_Demo", $con);

$sql="SELECT * FROM mysql WHERE id = '".$q."'";

$result = mysql_query($sql);

echo "<table border='1' cellpadding='1' cellspacing='0'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";

while($row = mysql_fetch_array($result))
{
    echo "<tr>";
    echo "<td>" . $row['firstname'] . "</td>";
    echo "<td>" . $row['lastname'] . "</td>";
    echo "<td>" . $row['age'] . "</td>";
    echo "<td>" . $row['hometown'] . "</td>";
    echo "<td>" . $row['job'] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysql_close($con);
?>