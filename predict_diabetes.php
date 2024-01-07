<?php
if(isset($_POST['glucose']) && isset($_POST['bp']) && isset($_POST['skin']) && isset($_POST['insulin']) && isset($_POST['bmi']) && isset($_POST['dpf']) && isset($_POST['age'])) {
    
    $glucose = $_POST['glucose'];
    $bp = $_POST['bp'];
    $skin = $_POST['skin'];
    $insulin = $_POST['insulin'];
    $bmi = $_POST['bmi'];
    $dpf = $_POST['dpf'];
    $age = $_POST['age'];

    // Run python script with input values
    $command = escapeshellcmd('python3 diabetesforecast.py '.$glucose.' '.$bp.' '.$skin.' '.$insulin.' '.$bmi.' '.$dpf.' '.$age);
    $output = shell_exec($command);

    echo $output;  // Return result to frontend
}
?>
