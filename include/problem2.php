<?php 
$name = $gender = $age = "";
$nameErr = $ageErr = "";

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    //validation
    if(empty($_POST['name'])) {
        $nameErr = "Name is Required";
    }
    if(empty($_POST['age'])) {
        $ageErr = "Age is Required";
    } else {
        if(!is_numeric($_POST['age'])) {
            $ageErr = "Age must be a number";
        } else if (is_numeric($_POST['age']) && $_POST['gender'] == "Male" && $_POST['age'] < 21) {
            $ageErr = "Age must be 21 or above";
        } else if (is_numeric($_POST['age']) && $_POST['gender'] == "Female" && $_POST['age'] < 18) {
            $ageErr = "Age must be 18 or above";
        }
    }
    

    //Sanitization
    $name = clean_input($_POST['name']);
    $gender = clean_input($_POST['gender']);
    $age = clean_input($_POST['age']);

}

function clean_input($input){
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}