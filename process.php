
<?php
// process.php - Handles reservations and contact form

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $date = htmlspecialchars(trim($_POST['date'] ?? ''));
    $time = htmlspecialchars(trim($_POST['time'] ?? ''));
    $guests = htmlspecialchars(trim($_POST['guests'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    // Example: Save data into a file (you can connect to DB instead)
    $data = "Name: $name | Email: $email | Phone: $phone | Date: $date | Time: $time | Guests: $guests | Message: $message\n";
    file_put_contents("reservations.txt", $data, FILE_APPEND);

    // Optionally send an email (configure your server to allow mail)
    $to = "your-email@example.com";  // replace with your restaurant email
    $subject = "New Reservation from $name";
    $body = $data;
    $headers = "From: noreply@yourwebsite.com";

    // Uncomment if mail is configured
    // mail($to, $subject, $body, $headers);

    // Response (AJAX or redirect)
    echo json_encode(["status" => "success", "message" => "Reservation submitted successfully!"]);
    exit;
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request."]);
    exit;
}
?>
=======
<?php
// process.php - Handles reservations and contact form

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $name = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email = htmlspecialchars(trim($_POST['email'] ?? ''));
    $phone = htmlspecialchars(trim($_POST['phone'] ?? ''));
    $date = htmlspecialchars(trim($_POST['date'] ?? ''));
    $time = htmlspecialchars(trim($_POST['time'] ?? ''));
    $guests = htmlspecialchars(trim($_POST['guests'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    // Example: Save data into a file (you can connect to DB instead)
    $data = "Name: $name | Email: $email | Phone: $phone | Date: $date | Time: $time | Guests: $guests | Message: $message\n";
    file_put_contents("reservations.txt", $data, FILE_APPEND);

    // Optionally send an email (configure your server to allow mail)
    $to = "your-email@example.com";  // replace with your restaurant email
    $subject = "New Reservation from $name";
    $body = $data;
    $headers = "From: noreply@yourwebsite.com";

    // Uncomment if mail is configured
    // mail($to, $subject, $body, $headers);

    // Response (AJAX or redirect)
    echo json_encode(["status" => "success", "message" => "Reservation submitted successfully!"]);
    exit;
} else {
    echo json_encode(["status" => "error", "message" => "Invalid request."]);
    exit;
}
?>
>>>>>>> eee5e7f577d57ad60b7e4ca18425f9898726db29
