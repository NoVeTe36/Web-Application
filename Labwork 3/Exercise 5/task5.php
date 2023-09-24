<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  Enter a number: <input type="text" name="number">
  <input type="submit">
</form>
<?php
    function checkPrime($number) { 
        for($i = 2; $i < $number / 2; $i++){
            if ($number % $i == 0) { 
                return 0;
            }
        }  
        return 1;   
    }
    
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = $_POST['number']; 
        $check = checkPrime($number);
        if ($check == 1)
            echo "the number is prime";
        else
            echo "the number is prime";
    }
?>
