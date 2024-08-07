<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Message</title>
    <style>
        /* Custom styles for the email template */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border: 1px solid #dcdcdc;
        }

        .header {
            background-color: #0056b3;
            color: #ffffff;
            padding: 15px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .content {
            padding: 20px;
        }

        .content p {
            margin: 10px 0;
        }

        .content strong {
            color: #333333;
        }

        .footer {
            background-color: #0056b3;
            color: #ffffff;
            padding: 10px;
            text-align: center;
            border-radius: 0 0 8px 8px;
            font-size: 14px;
        }

        .footer a {
            color: #ffffff;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <!-- Email Header -->
        <div class="header">
            <h1>New Contact Message from PFD Global</h1>
        </div>

        <!-- Email Content -->
        <div class="content">
            <p><strong>Name:</strong> {{ $contactData['name'] }}</p>
            <p><strong>Email:</strong> {{ $contactData['email'] }}</p>
            <p><strong>Phone:</strong> {{ $contactData['phone'] }}</p>
            <p><strong>Message:</strong></p>
            <p>{{ $contactData['message'] }}</p>
        </div>

        <!-- Email Footer -->
        <div class="footer">
            <p>Thank you for reaching out to us!</p>
            <p>
                <a href="https://www.pfdglobal.com">Visit our website</a> |
                <a href="mailto:support@pfdglobal.com">Contact Support</a>
            </p>
        </div>
    </div>
</body>

</html>
