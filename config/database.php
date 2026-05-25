<?php
/**
 * Database Configuration
 * Konfigurasi koneksi database MySQL
 */

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'delivery_app');
define('DB_PORT', 3306);

// Timezone
date_default_timezone_set('Asia/Jakarta');

// Environment
define('ENVIRONMENT', 'development');

// Base URL
define('BASE_URL', 'http://localhost:8000/');

// API Configuration
define('API_URL', BASE_URL . 'api/');

// Payment Gateway
define('PAYMENT_GATEWAY', 'midtrans'); // midtrans atau xendit
define('MIDTRANS_SERVER_KEY', 'your_midtrans_server_key');
define('MIDTRANS_CLIENT_KEY', 'your_midtrans_client_key');

// Email Configuration
define('MAIL_HOST', 'smtp.gmail.com');
define('MAIL_PORT', 587);
define('MAIL_USER', 'your_email@gmail.com');
define('MAIL_PASS', 'your_app_password');
define('MAIL_FROM', 'noreply@deliveryapp.com');

// SMS Configuration (Twilio/WhatsApp Business)
define('SMS_PROVIDER', 'twilio'); // twilio atau nexmo
define('SMS_ACCOUNT_SID', 'your_account_sid');
define('SMS_AUTH_TOKEN', 'your_auth_token');
define('SMS_PHONE', 'your_phone_number');

// Google Maps API
define('GOOGLE_MAPS_API_KEY', 'your_google_maps_api_key');

// Session
ini_set('session.gc_maxlifetime', 3600);
ini_set('session.cookie_lifetime', 3600);

// Error Reporting
if (ENVIRONMENT === 'development') {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED & ~E_STRICT & ~E_USER_NOTICE & ~E_USER_DEPRECATED);
    ini_set('display_errors', 0);
}
?>
