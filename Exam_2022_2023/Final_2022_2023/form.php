<?php
$servername = "localhost";
$username = "root";

$conn = mysqli_connect($servername, $username);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "\n");
}

$sql = "DROP DATABASE IF EXISTS surveys;";
// if (mysqli_query($conn, $sql)) {
//     echo "Database dropped successfully\n";
// } else {
//     echo "No database exists: " . mysqli_error($conn) . "\n";
// }


$sql = "create database if not exists surveys;";
// if (mysqli_query($conn, $sql)) {
//     echo "Database created successfully\n";
// } else {
//     echo "Error creating database: " . mysqli_error($conn) . "\n";
// }


$sql = "use surveys;";
if (mysqli_query($conn, $sql)) {
    echo "Database changed successfully\n";
} else {
    echo "Error changing database: " . mysqli_error($conn) . "\n";
}


$sql = "create table if not exists surveys_data(
    s_id int auto_increment primary key,
    full_name varchar(50),
    dob date,
    email varchar(50),
    phone varchar(50),
    major varchar(50),
    optionMP varchar(50),
    optionWork varchar(50),
    optionEnv varchar(50),
    idea text
);";

// if (!mysqli_query($conn, $sql)) {
//     echo "Error creating table: " . mysqli_error($conn) . "\n";
// } else {
//     echo "Table Data created successfully\n";
// }



if (isset($_POST['fullname'])) {
    $full_name = $_POST['fullname'];
    $dob = $_POST['dob'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $major = $_POST['majority'];
    $optionMP = $_POST['optionMP'];
    $optionWork = $_POST['optionWork'];
    $optionEnv = $_POST['optionEnv'];
    $idea = $_POST['idea'];

    $sql = "INSERT INTO surveys_data (full_name, dob, email, phone, major, optionMP, optionWork, optionEnv, idea) VALUES ('$full_name', '$dob', '$email', '$phone', '$major', '$optionMP', '$optionWork', '$optionEnv', '$idea');";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully\n";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "\n";
    }
}


mysqli_close($conn);
?>
