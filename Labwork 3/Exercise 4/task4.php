<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Enter a number: <input type="text" name="number">
  <input type="submit">
</form>
<?php
    function factorial($number) { 
        if ($number < 2) { 
            return 1; 
        } else { 
            return ($number * factorial($number-1)); 
        }
    
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number']; 
        if (empty($number)) {
            echo "Number is empty";
        } else {
            echo "The factorial value of the number is: ";
            echo factorial($number);
        }
    }
?>
