<?php

// DB variables
define('DB_VARS', [
    'DB_PORT'       => '3306',
    'DB_SERVER'     => 'localhost',
    'DB_USER'       => 'root',
    'DB_PASSWORD'   => '',
    'DB_NAME'       => 'my_database',
]);

// Cloudinary credentials
\Cloudinary::config([
    "cloud_name" => "my_cloud_name",
    "api_key"    => "my_key",
    "api_secret" => "my_secret"
]);