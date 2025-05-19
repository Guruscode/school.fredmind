<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Admission Confirmation</title>
    <style>
        body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        .header { background: #007bff; color: #fff; padding: 10px; text-align: center; }
        .content { padding: 20px; border: 1px solid #ddd; }
        .footer { text-align: center; font-size: 12px; color: #777; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Fredmind School</h1>
        </div>
        <div class="content">
            <h2>Admission Confirmation</h2>
            <p>Dear {{ $student->first_name }} {{ $student->last_name }},</p>
            <p>Thank you for your registration and payment at Fredmind School. We have successfully received your payment, and your application is being processed.</p>
            <h3>Registration Details</h3>
            <ul>
                <li><strong>Course:</strong> {{ $student->course }}</li>
                <li><strong>Cohort:</strong> {{ $student->cohort }}</li>
                <li><strong>Class Format:</strong> {{ $student->class_format }}</li>
                <li><strong>Payment Plan:</strong> {{ $payment->payment_plan }}</li>
                <li><strong>Amount Paid:</strong> {{ $student->currency }} {{ number_format($payment->amount, 2) }}</li>
                <li><strong>Balance Due:</strong> {{ $student->currency }} {{ number_format($payment->balance_due, 2) }}</li>
            </ul>
            <p>Our admin team will reach out to you soon with your official admission letter and further instructions.</p>
            <p>If you have any questions, please contact our support team at <a href="mailto:support@fredmindschool.com">support@fredmindschool.com</a> or call +234 123 456 7890.</p>
            <p>We look forward to having you at Fredmind School!</p>
            <p>Best regards,<br>The Fredmind School Team</p>
        </div>
        <div class="footer">
            <p>© {{ date('Y') }} Fredmind School. All rights reserved.</p>
        </div>
    </div>
</body>
</html>