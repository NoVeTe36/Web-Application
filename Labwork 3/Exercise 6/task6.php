<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Enter an array: <input type="text" name="array">
    <input type="submit">
</form>

<?php
function sort_array($array)
{
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