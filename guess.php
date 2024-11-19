<html>
<body>
<title> 02d1421b </title> 
<h1>Welcome to my guessing game</h1>

<?php
$correctnumber = 13; 
if (isset($_GET['guess'])) {
    // Get the guess from the URL
    $guess = $_GET['guess'];

    if (!is_numeric($guess)) {
        echo "Your guess is not a number.";
    } else if ($guess < $correctnumber) {
        echo "Your guess is too low.";
    } else if ($guess > $correctnumber) {
        echo "Your guess is too high.";
    } else {
        echo "Congratulations - You are right!";
    }
} else {
    
    echo "Missing guess parameter. <br> Your guess is too short.";
}
?>
</body>
</html>
