<?php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'wideworldimporters';
$db_port = 3306;

$db_conn = new mysqli($db_host, $db_user, $db_pass, $db_name, $db_port);
if ($db_conn->connect_error) {
    $error = $db_conn->connection_error;
}
echo"great work!";