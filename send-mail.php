<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['number']);
    $email = htmlspecialchars($_POST['email']);
    $service = htmlspecialchars($_POST['service']);
    $message_text = htmlspecialchars($_POST['message']);

    $to = "info@noortravelsgh.com";
    $subject = "✈️ New Travel Inquiry - Noor Travels";

    $message = '
    <html>
    <head>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f6f8;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }
        .header {
            background: #2ecc71;
            color: #fff;
            padding: 20px;
            text-align: center;
            font-size: 22px;
            font-weight: bold;
        }
        .content {
            padding: 20px;
        }
        .row {
            margin-bottom: 15px;
        }
        .label {
            font-weight: bold;
            color: #333;
        }
        .value {
            color: #555;
        }
        .footer {
            background: #f1f1f1;
            padding: 15px;
            text-align: center;
            font-size: 12px;
            color: #888;
        }
    </style>
    </head>

    <body>
    <div class="container">

        <div class="header">
            ✈️ Noor Travels - New Inquiry
        </div>

        <div class="content">

            <div class="row">
                <div class="label">Full Name:</div>
                <div class="value">'.$name.'</div>
            </div>

            <div class="row">
                <div class="label">Phone:</div>
                <div class="value">'.$phone.'</div>
            </div>

            <div class="row">
                <div class="label">Email:</div>
                <div class="value">'.$email.'</div>
            </div>

            <div class="row">
                <div class="label">Service:</div>
                <div class="value">'.$service.'</div>
            </div>

            <div class="row">
                <div class="label">Message:</div>
                <div class="value">'.$message_text.'</div>
            </div>

        </div>

        <div class="footer">
            Noor Travels Ghana • Accra • +233 552 305 782
        </div>

    </div>
    </body>
    </html>
    ';

    // IMPORTANT HEADERS
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8\r\n";
    $headers .= "From: Noor Travels <no-reply@noortravelsgh.com>\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "<script>alert('Message sent successfully!'); window.location.href='contact.php';</script>";
    } else {
        echo "<script>alert('Failed to send message. Try again.'); window.location.href='contact.php';</script>";
    }
}