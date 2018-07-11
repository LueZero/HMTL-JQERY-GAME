<!DOCTYPE html>
<html>
<head>
<style>
table {
    width: 100%;
    border-collapse: collapse;
}

table, td, th {
    border: 1px solid black;
    padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);
include("php/Connection.php");	



$sql="SELECT * FROM stu WHERE no = '".$q		."'";
$result = mysql_query($sql,$db);
echo "<table>
<tr>
<th>老師</th>
<th>科目</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";
while($row = mysql_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['teacher'] . "</td>";
    echo "<td>" . $row['score'] . "</td>";
	echo "<td>" . $row['score'] . "</td>";
	echo "<td>" . $row['score'] . "</td>";
	echo "<td>" . $row['score'] . "</td>";
    echo "</tr>";
}
echo "</table>";
mysql_close($db);
?>
</body>
</html>