<?php
$servername = "localhost";
$username = "root";

$conn = mysqli_connect($servername, $username);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "\n");
}

$sql = "use labwork_3;";

if (mysqli_query($conn, $sql)) {
    echo "Database changed successfully\n";
} else {
    echo "Error changing database: " . mysqli_error($conn) . "\n";
}

$sql = "select * from student where s_mark > 75;";
$result = mysqli_query($conn, $sql);
echo "<table border='1'>
<tr>
<th>Student ID</th>

<th>Student Name</th>

<th>Student Mark</th>

<th>Student Class</th>

</tr>
";

while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['s_id'] . "</td>";
    echo "<td>" . $row['s_name'] . "</td>";
    echo "<td>" . $row['s_mark'] . "</td>";
    echo "<td>" . $row['s_class'] . "</td>";
    echo "</tr>";
}

echo "</table>";

$sql = "select * from student where s_mark > 60 and s_mark <= 75;";
$result = mysqli_query($conn, $sql);
echo "<table border='1'>
<tr>
<th>Student ID</th>
<th>Student Name</th>
<th>Student Mark</th>
<th>Student Class</th>
</tr>
";

while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['s_id'] . "</td>";
    echo "<td>" . $row['s_name'] . "</td>";
    echo "<td>" . $row['s_mark'] . "</td>";
    echo "<td>" . $row['s_class'] . "</td>";
    echo "</tr>";
}
echo "</table>";

$sql = "select * from student where s_mark < 60;";
$result = mysqli_query($conn, $sql);
echo "<table border='1'>
<tr>
<th>Student ID</th>
<th>Student Name</th>
<th>Student Mark</th>
<th>Student Class</th>
</tr>
";

while ($row = mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>" . $row['s_id'] . "</td>";
    echo "<td>" . $row['s_name'] . "</td>";
    echo "<td>" . $row['s_mark'] . "</td>";
    echo "<td>" . $row['s_class'] . "</td>";
    echo "</tr>";
}
echo "</table>";

mysqli_close($conn);
?>