# Email Configuration Guide

## Current Setup
The enrollment form is now configured to send email notifications to `ahmmedd606@gmail.com` when someone submits an enrollment.

## Email Configuration Options

### Option 1: Gmail SMTP (Recommended for testing)
Add these settings to your `.env` file:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=your-email@gmail.com
MAIL_FROM_NAME="Azhary Academy"
```

**Note:** For Gmail, you need to use an "App Password" instead of your regular password. Enable 2-factor authentication and generate an app password.

### Option 2: Mailgun (Recommended for production)
```env
MAIL_MAILER=mailgun
MAILGUN_DOMAIN=your-domain.com
MAILGUN_SECRET=your-mailgun-secret
MAIL_FROM_ADDRESS=noreply@your-domain.com
MAIL_FROM_NAME="Azhary Academy"
```

### Option 3: SendGrid
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.sendgrid.net
MAIL_PORT=587
MAIL_USERNAME=apikey
MAIL_PASSWORD=your-sendgrid-api-key
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS=noreply@your-domain.com
MAIL_FROM_NAME="Azhary Academy"
```

### Option 4: Amazon SES
```env
MAIL_MAILER=ses
AWS_ACCESS_KEY_ID=your-access-key
AWS_SECRET_ACCESS_KEY=your-secret-key
AWS_DEFAULT_REGION=us-east-1
MAIL_FROM_ADDRESS=noreply@your-domain.com
MAIL_FROM_NAME="Azhary Academy"
```

## Testing Email Configuration
After updating your `.env` file, test the email configuration:

```bash
php artisan tinker
```

Then run:
```php
Mail::raw('Test email from Azhary Academy', function($message) {
    $message->to('ahmmedd606@gmail.com')->subject('Test Email');
});
```

## Current Implementation
- Email notifications are sent to: `ahmmedd606@gmail.com`
- Email template: `resources/views/vendor/mail/html/enrollment-notification.blade.php`
- Mailable class: `app/Mail/EnrollmentNotification.php`
- Controller: `app/Http/Controllers/EnrollmentController.php`

## Fallback Behavior
If email sending fails, the enrollment will still be saved to the database and the error will be logged to the Laravel log file.
