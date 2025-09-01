# Email Setup Instructions for Azhary Academy

## Current Issue
The email system is currently configured to use Mailhog (local development), but you need to configure it with a real email service.

## Quick Setup - Gmail (Recommended)

### Step 1: Create Gmail App Password
1. Go to your Google Account settings: https://myaccount.google.com/
2. Enable 2-Factor Authentication if not already enabled
3. Go to "Security" → "App passwords"
4. Generate a new app password for "Mail"
5. Copy the 16-character password

### Step 2: Update .env File
Replace the placeholder values in your `.env` file with your actual Gmail credentials:

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-actual-gmail@gmail.com
MAIL_PASSWORD=your-16-character-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="your-actual-gmail@gmail.com"
MAIL_FROM_NAME="Azhary Academy"
```

### Step 3: Test the Configuration
After updating the .env file, test the email:

```bash
php artisan config:clear
```

Then visit: `https://azharyfr.com/test/email`

## Alternative: Use Your Own Email Service

If you prefer to use a different email service, here are the configurations:

### Option 1: Outlook/Hotmail
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp-mail.outlook.com
MAIL_PORT=587
MAIL_USERNAME=your-email@outlook.com
MAIL_PASSWORD=your-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="your-email@outlook.com"
MAIL_FROM_NAME="Azhary Academy"
```

### Option 2: Yahoo Mail
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.mail.yahoo.com
MAIL_PORT=587
MAIL_USERNAME=your-email@yahoo.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
MAIL_FROM_ADDRESS="your-email@yahoo.com"
MAIL_FROM_NAME="Azhary Academy"
```

## What Happens After Setup

Once configured, every time someone submits an enrollment form:
1. The enrollment will be saved to the database
2. An email notification will be sent to `ahmmedd606@gmail.com`
3. The email will contain all enrollment details
4. You'll receive a professional-looking email with a link to view the enrollment in your admin panel

## Troubleshooting

If you still get connection errors:
1. Make sure your email credentials are correct
2. Check if your email provider allows SMTP access
3. Try using a different email service
4. Check your server's firewall settings

## Security Note
- Never commit your .env file to version control
- Use app passwords instead of regular passwords for Gmail
- Consider using a dedicated email service like Mailgun for production
