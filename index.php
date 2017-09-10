<?php
/**
 * Created by PhpStorm.
 * User: rahul
 * Date: 10/9/17
 * Time: 8:20 PM
 */

echo "Hello World";
$host = getenv("MYSQL_HOST");
$port = getenv("MYSQL_PORT");

$con = new PDO("mysql:host=" . $host . ":" . $port . ";dbname=" . "beta_wootag" . ";Pooling=True;MinimumPoolSize=10;maximumpoolsize=50;Connection Timeout=30;", 'root', 'toor');
if ($con) {
    echo "connect1";
}