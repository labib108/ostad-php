<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Script</title>
</head>
<body>
    <?php
    //handel form submission
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        
        echo "<p>Thanks for submitting your form, $name!</p>";
        echo "<p>Your email address is: $email.</p>";
        echo "<p>Your message is: $message</p>";   
    }else{
        echo "<p>Error:"
    }
    ?>
</body>
</html>