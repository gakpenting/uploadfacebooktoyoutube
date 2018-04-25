<?php
require_once  'vendor/autoload.php';
$dotenv = new Dotenv\Dotenv(__DIR__, 'myconfig');
$dotenv->load();
$s3_bucket = getenv('S3_BUCKET');
echo $s3_bucket;