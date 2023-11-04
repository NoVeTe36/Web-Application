<?php
$servername = "localhost";
$username = "root";

$conn = mysqli_connect($servername, $username);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "\n");
}

$sql = "DROP DATABASE IF EXISTS myMetrics;";
// if (mysqli_query($conn, $sql)) {
//     echo "Database dropped successfully\n";
// } else {
//     echo "No database exists: " . mysqli_error($conn) . "\n";
// }


$sql = "create database if not exists myMetrics;";
// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully\n";
// } else {
//     echo "Error creating database: " . mysqli_error($conn) . "\n";
// }


$sql = "use myMetrics;";
if (mysqli_query($conn, $sql)) {
    echo "Database changed successfully\n";
} else {
    echo "Error changing database: " . mysqli_error($conn) . "\n";
}


$sql = "create table if not exists Data(
    s_id int auto_increment primary key,
    s_tp float,
    s_fn float,
    s_fp float,
    s_tn float
);";

// if (!mysqli_query($conn, $sql)) {
//     echo "Error creating table: " . mysqli_error($conn) . "\n";
// } else {
//     echo "Table Data created successfully\n";
// }



if (isset($_POST['TP'])) {
    // take the input from the user
    $tp = $_POST['TP'];
    $fn = $_POST['FN'];
    $fp = $_POST['FP'];
    $tn = $_POST['TN'];
    $sql = "insert into Data (s_tp, s_fn, s_fp, s_tn) values ('$tp','$fn','$fp','$tn');";
    if (mysqli_query($conn, $sql)) {
        echo "New records created successfully\n";
    } else {
        echo "Error: " . $sql . "\n" . mysqli_error($conn) . "\n";
    }
}



$sql = "SELECT * FROM Data ORDER BY s_id DESC LIMIT 1;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<br>"; 
        echo "Precision = " . $row["s_tp"] / ($row["s_tp"] + $row["s_fp"]) . "<br>";
        echo "Recall = " . $row["s_tp"] / ($row["s_tp"] + $row["s_fn"]) . "<br>";
        echo "Accuracy = " . ($row["s_tp"] + $row["s_tn"]) / ($row["s_tp"] + $row["s_fn"] + $row["s_fp"] + $row["s_tn"]) . "<br>";
        echo "F1 Score = " . (2 * $row["s_tp"]) / (2 * $row["s_tp"] + $row["s_fp"] + $row["s_fn"]) . "<br>";
    }
} else {
    echo "0 results";
}


mysqli_close($conn);
?>
