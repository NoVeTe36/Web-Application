<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Enter a string <input type="text" name="string">
    <input type="submit" value="Reverse">
</form>

<?php
function reverse_string($string)
{
    $string = strrev($string);
    return $string;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $string = $_POST['string'];
    $string = trim($string);
    if (empty($string)) {
        echo "String is empty";
    } 
    else {
        $reversedString = reverse_string($string);
        echo "String reversed successfully: " . ($reversedString);
    }
}
?>