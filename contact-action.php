<?php
$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$message = isset($_POST['message']) ? $_POST['message'] : '';

if (empty($firstname) || empty($lastname) || empty($email) || empty($message)) {
    die('All fields are required.');
}

// Database connection 
$coon = new mysqli('localhost', 'root', '', 'tests');

if ($coon->connect_error) {
    die('Connection Failed: ' . $coon->connect_error);
} else {
    $stmt = $coon->prepare("INSERT INTO registration (firstname, lastname, email, message) VALUES (?, ?, ?, ?)");
    if ($stmt) {
        $stmt->bind_param("ssss", $firstname, $lastname, $email, $message);
        $stmt->execute();
        echo "Registration successfully completed!";
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $coon->error;
    }
    $coon->close();
}
?>
