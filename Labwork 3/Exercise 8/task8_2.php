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

$sql = "update student set s_class = 'two' where s_mark < 60;";
if (mysqli_query($conn, $sql)) {
    echo "Records updated successfully\n";
} else {
    echo "Error updating records: " . mysqli_error($conn) . "\n";
}

mysqli_close($conn);
?>

