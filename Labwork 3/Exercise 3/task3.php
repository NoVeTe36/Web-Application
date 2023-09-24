<?php
$myTable = [
    // ["Firstname", "Lastname", "Age"],
    ["Jill", "Smith", "50"],
    ["Jane", "Jackson", "94"],
    ["John ", "Doe", "80"]
];
echo "<style>table, th, td { border: 1px solid black }</style>";
echo "<table width = '70%'>";
echo "<tr><th>Firstname</th><th>Lastname</th><th>Age</th></tr>";
foreach ($myTable as $row) {
    echo "<tr>";
    foreach ($row as $cell) {
        echo "<td>$cell</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
