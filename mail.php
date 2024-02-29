<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $vehicle = $_POST['vehicle'];
    $passenger = $_POST['passenger'];

    // Set the recipient email address
    $to = 'prithvikumar800@gmail.com';

    // Set the subject of the email
    $subject = 'New Booking Inquiry';

    // Compose the email message
    $message = "Phone: $phone\n";
    $message .= "Location: $location\n";
    $message .= "Date: $date\n";
    $message .= "Time: $time\n";
    $message .= "Vehicle: $vehicle\n";
    $message .= "Passenger: $passenger\n";

    // Additional headers
    $headers = 'From: webmaster@example.com' . "\r\n" .
               'Reply-To: webmaster@example.com' . "\r\n" .
               'X-Mailer: PHP/' . phpversion();

    // Send the email
    mail($to, $subject, $message, $headers);

    // Output success message
    echo 'success';
} else {
    // Output error message
    echo 'error';
}
?>
