<?php
require_once './vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;

// Function to generate HTML email content for clients (thank you message)
function getClientEmailContent($name)
{
    // HTML content of the email for the client (thank you message)
    $content = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You for Contacting Us!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
        }
        h1 {
            color: #009246;
            text-align: center;
        }
        p {
            color: #333;
            line-height: 1.6;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Thank You for Contacting Us!</h1>
        <p>Dear ' . $name . ',</p>
        <p>We have received your message and will get back to you as soon as possible.</p>
        <p>Best regards,<br>Eng.Azzam Aziz Ali </p>
    </div>
</body>
</html>';

    return $content;
}

// Function to generate HTML email content for you (displaying form content)
function getAdminEmailContent($formData)
{
    // HTML content of the email for you (displaying form content)
    $content = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 10px;
            padding: 20px;
        }
        h1 {
            color: #009246;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Contact Form Submission</h1>
        <table>
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>';
    foreach ($formData as $key => $value) {
        $content .= '<tr>
                        <td>' . $key . '</td>
                        <td>' . $value . '</td>
                    </tr>';
    }
    $content .= '</table>
    </div>
</body>
</html>';

    return $content;
}

// Create a new PHPMailer object
$mail = new PHPMailer();

// Configure SMTP for sending email to the sender
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com'; // Google SMTP server
$mail->SMTPAuth = true;
$mail->Username = 'Azzamazezali@gmail.com'; // Your Gmail email address
$mail->Password = 'Azzam_85473@1704'; // Your Gmail password
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->CharSet = 'UTF-8';

// Configure SMTP for sending email to you
$mail2 = new PHPMailer();
$mail2->isSMTP();
$mail2->Host = 'smtp.gmail.com'; // Google SMTP server
$mail2->SMTPAuth = true;
$mail->Username = 'Azzamazezali@gmail.com'; // Your Gmail email address
$mail->Password = 'Azzam_85473@1704'; // Your Gmail password
$mail2->SMTPSecure = 'tls';
$mail2->Port = 587;
$mail2->CharSet = 'UTF-8';

// Retrieve data from the form
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$phone = trim($_POST['phone']);
$message = trim($_POST['message']);

// Set sender's email (you) and recipient's email (sender)
$mail->setFrom('Azzamazezali@gmail.com', 'Eng.Azzam Aziz Ali'); // Change these to your email and name
$mail->addAddress($email, $name);
$mail->Subject = 'Thank You for Contacting ME!';
$mail->isHTML(true);
$mail->Body = getClientEmailContent($name);

// Set sender's email (you) and recipient's email (you)
$mail2->setFrom($email, $name); // Change these to your email and name
$mail2->addAddress('Azzamazezali@gmail.com', 'Eng.Azzam Aziz Ali'); // Change these to your email and name
$mail2->Subject = 'Contact Form Submission';
$mail2->isHTML(true);
$mail2->Body = getAdminEmailContent([
    'Name' => $name,
    'Email' => $email,
    'Phone' => $phone,
    'Message' => $message
]);

// Send the emails
if (!$mail->send() || !$mail2->send()) {
    echo 'error';
} else {
    echo 'success';
}
