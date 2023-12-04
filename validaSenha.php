<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the submitted email and password
    $submittedEmail = $_POST["email"];
    $submittedPassword = $_POST["pass"];

    // Define the expected email and password
    $expectedEmail = "teste@gmail.com";
    $expectedPassword = "123";

    // Check if the submitted email and password match the expected values
    if ($submittedEmail === $expectedEmail && $submittedPassword === $expectedPassword) {
        header("Location: ./menu.html");
    } else {
        header("Location: ./");
    }
}
?>
