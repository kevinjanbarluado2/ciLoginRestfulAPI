Create Database Tables
**************
To store user’s account information, a table needs to be created in the database. The following SQL creates a users table with some basic fields in MySQL database.

CREATE TABLE `users` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `first_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
 `last_name` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
 `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
 `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
 `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
 `created` datetime NOT NULL,
 `modified` datetime NOT NULL,
 `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive ',
 PRIMARY KEY (`id`)


CREATE TABLE `keys` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `user_id` int(11) NOT NULL,
 `key` varchar(40) NOT NULL,
 `level` int(2) NOT NULL,
 `ignore_limits` tinyint(1) NOT NULL DEFAULT '0',
 `is_private_key` tinyint(1) NOT NULL DEFAULT '0',
 `ip_addresses` text,
 `date_created` datetime NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;




 Retrieve User Account Data via REST API:
 ***************
The following code performs a GET request to retrieve the user’s account data via CodeIgniter REST API.

// API key
$apiKey = 'CODEX@123';

// API auth credentials
$apiUser = "admin";
$apiPass = "1234";

// Specify the ID of the user
$userID = 1; 

// API URL
$url = 'http://example.com/codeigniter/api/authentication/user/'.$userID;

// Create a new cURL resource
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("X-API-KEY: " . $apiKey));
curl_setopt($ch, CURLOPT_USERPWD, "$apiUser:$apiPass");

$result = curl_exec($ch);

// Close cURL resource
curl_close($ch);


Update User Account via REST API:
****************
The following code performs a PUT request to update the user data via CodeIgniter REST API.

// API key
$apiKey = 'CODEX@123';

// API auth credentials
$apiUser = "admin";
$apiPass = "1234";

// Specify the ID of the user
$userID = 1; 

// API URL
$url = 'http://example.com/codeigniter/api/authentication/user/';

// User account info
$userData = array(
    'id' => 1,
    'first_name' => 'John2',
    'last_name' => 'Doe2',
    'email' => 'john2@example.com',
    'password' => 'user_new_pass',
    'phone' => '545-856-3439'
);

// Create a new cURL resource
$ch = curl_init($url);

curl_setopt($ch, CURLOPT_TIMEOUT, 30);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('X-API-KEY: '.$apiKey, 'Content-Type: application/x-www-form-urlencoded'));
curl_setopt($ch, CURLOPT_USERPWD, "$apiUser:$apiPass");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT");
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($userData));

$result = curl_exec($ch);

// Close cURL resource
curl_close($ch);