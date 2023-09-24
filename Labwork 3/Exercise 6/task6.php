<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Enter an array: <input type="text" name="array">
    <input type="submit">
</form>

<?php
function sort_array($array)
{
    $temp = 0;
    for ($i = 0; $i < count($array); $i++) {
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$i] > $array[$j]) {
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }
    return $array;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $array = $_POST['array'];
    if (empty($array)) {
        echo "Array is empty";
    } else {
        $array = explode(" ", $array);
        echo "The sorted array is: ";
        $array = sort_array($array);
        foreach ($array as $value) {
            echo $value . " ";
        }
    }
}
?>