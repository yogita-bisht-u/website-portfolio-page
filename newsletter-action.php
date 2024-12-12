<?php

$email = isset($_POST['email']) ? $_POST['email'] : '';

if( empty($email)) {
    die('All fields are required.');
}

// Database connection 
$coon = new mysqli('localhost', 'root', '', 'tests');

if ($coon->connect_error) {
    die('Connection Failed: ' . $coon->connect_error);
} else {
    $stmt = $coon->prepare("INSERT INTO newsletter (email ) VALUES (?)");
    if ($stmt) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        echo "newsletter successfully completed!";
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $coon->error;
    }
    $coon->close();
}
?>
