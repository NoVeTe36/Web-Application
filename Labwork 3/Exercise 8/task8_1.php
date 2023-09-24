<?php
$servername = "localhost";
$username = "root";

$conn = mysqli_connect($servername, $username);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "\n");
}

$sql = "create database if not exists labwork_3;";
if (mysqli_query($conn, $sql)) {
    echo "Database created successfully\n";
} else {
    echo "Error creating database: " . mysqli_error($conn) . "\n";
}

$sql = "use labwork_3;";
if (mysqli_query($conn, $sql)) {
    echo "Database changed successfully\n";
} else {
    echo "Error changing database: " . mysqli_error($conn) . "\n";
}

$sql = "create table if not exists student(
    s_id int auto_increment primary key,
	s_name varchar(50),
    s_mark int,
    s_class varchar(10),
    s_sex varchar(10)
);";

if (mysqli_query($conn, $sql)) {
    echo "Table student created successfully\n";
} else {
    echo "Error creating table: " . mysqli_error($conn) . "\n";
}

$sql = "
insert into student (s_name, s_class, s_mark, s_sex) values ('John Deo','Four','75','female');
insert into student (s_name, s_class, s_mark, s_sex) values ('Max Ruin','Three','85','male');
insert into student (s_name, s_class, s_mark, s_sex) values ('Arnold','Three','55','male');
insert into student (s_name, s_class, s_mark, s_sex) values ('Krish Star','Four','60','female');
insert into student (s_name, s_class, s_mark, s_sex) values ('John Mike','Four','60','female');
insert into student (s_name, s_class, s_mark, s_sex) values ('Alex John','Four','55','male');
insert into student (s_name, s_class, s_mark, s_sex) values ('My John Rob','Fifth','78','male');
insert into student (s_name, s_class, s_mark, s_sex) values ('Asruid','Five','85','male');
insert into student (s_name, s_class, s_mark, s_sex) values ('Tes Qry','Six','78','male');
insert into student (s_name, s_class, s_mark, s_sex) values ('Big John','Four','55','female');
";

if (mysqli_multi_query($conn, $sql)) {
    echo "New records created successfully\n";
} else {
    echo "Error: " . $sql . "\n" . mysqli_error($conn) . "\n";
}

mysqli_close($conn);
?>