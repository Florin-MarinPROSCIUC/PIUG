<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];s

    $to = "animalclown6321@gmail.com"; // Replace with your email address
    $subject = "New Subscription";
    $message = "Name: $name\nEmail: $email";

    // Uncomment the following line to send the email
  mail($to, $subject, $message);

    // You can add additional handling or response here
    echo "Subscription successful!";
}
?>