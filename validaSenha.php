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
        
    } else {
        header("Location: ./");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ENTROU</title>
</head>
<body>
    <h1 style="color: green; font-size: 140px;">ENTROU</h1>
    <iframe width="560" height="315" src="https://www.youtube.com/embed/04854XqcfCY?si=HvHuC2YABqNprJ6R&autoplay=1" title="YouTube video player" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</body>
</html>
