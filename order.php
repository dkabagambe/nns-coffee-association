<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $firstName = htmlspecialchars($_POST['first_name']);
    $lastName = htmlspecialchars($_POST['last_name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $country = htmlspecialchars($_POST['country']);
    $Location = htmlspecialchars($_POST['Location']);
    $items = htmlspecialchars($_POST['items']);
    $quantity = htmlspecialchars($_POST['quantity']);
    $message = htmlspecialchars($_POST['message']);

    // Email recipient and subject
    $to = "danielkabagambe@gmail.com";
    $subject = "New Order from $firstName $lastName";

    // Email body
    $body = "
    New order received:

    First Name: $firstName
    Last Name: $lastName
    Email: $email
    Phone: $phone
    Country: $country
    Location: $Location
    Items Ordered: $items
    Quantity: $quantity
    Message: $message
    ";

    // Email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your order. We will contact you soon!";
    } else {
        echo "Sorry, there was an error sending your order. Please try again.";
    }
}
?>
