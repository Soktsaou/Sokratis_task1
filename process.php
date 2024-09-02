<?php
    // retrieve submitted data
    $firstName = $_POST['firstName'];
    $email = $_POST['myEmail'];
    $message = $_POST['message'];


    // log errors
    $errors = [];

    if (empty($firstName)) {
        $errors[] = "First Name is required.";
    }

    if ((empty($email)) || (!filter_var($email, FILTER_VALIDATE_EMAIL))){
        $errors[] = "Valid email required.";
    }

    if (empty($message)) {
        $errors[] = "Message is required.";
    }

    
    // check for errors then display them
    if (!empty($errors)) {
        echo "<h2>Errors:</h2>";
        echo "<ul>";
        foreach ($errors as $error) {
            echo "<li>" . $error . "</li>";
        }
        echo "</ul>";
        echo "<p><a href='index.html'>Go back to the form</a></p>";
    } else {
        // No errors, display the submitted data
        echo "<h2>Thank you for contacting us!</h2>";
        echo "<p><strong>First Name:</strong> " . $firstName . "</p>";
        echo "<p><strong>Email Address:</strong> " . $email . "</p>";
        echo "<p><strong>Message:</strong> " . $message . "</p>";
    }

?>