<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
?>

<!docytpe html>
<html lang="en">
<head>
<title>Regular Expression</title>
<body>
    <h3>Example of Regular Expression</h3>
<?php
//Reg Expression example
$sTest = "Work at Tenneco!";
$sPattern = "/Tenneco/i";
echo preg_match($sPattern, $sTest);
?>
<h3>Exception Handling</h3>
<?php
function animal($animal) {
    if($animal != "Rhino") {
        throw new Exception("You did not select Rhino");
    }
    return true;
}
try {
    animal("Dog");
    echo "the animal is not a dog.";
}
catch(Exception $animal) {
    echo 'Message: '.$animal->getMessage();
}
?>
</body>