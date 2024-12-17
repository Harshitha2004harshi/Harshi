<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collecting form data
    $firstname = htmlspecialchars($_POST['firstname']);
    $lastname = htmlspecialchars($_POST['lastname']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $gender = htmlspecialchars($_POST['gender']);
    $phone = htmlspecialchars($_POST['phone']);
    $address = htmlspecialchars($_POST['address']);

    // Here you would typically insert data into a database
    // For demonstration, we're just displaying the collected data
    echo "<h2>Registration Successful!</h2>";
    echo "<p><strong>First Name:</strong> $firstname</p>";
    echo "<p><strong>Last Name:</strong> $lastname</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Phone:</strong> $phone</p>";
    echo "<p><strong>Address:</strong> $address</p>";

    // You can also hash the password before storing it in the database
    // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
} else {
    echo "<p>Form submission error.</p>";
}
?>
