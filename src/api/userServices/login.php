<?php

require_once dirname($_SERVER['DOCUMENT_ROOT']) . '/src/vendor/autoload.php';

use IdeaFree\Tools;
use IdeaFree\Database;

$Tools = new Tools();

$Database = new Database($Tools);

$conn = $Database->getConnection();



#$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
$username="user";
$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
$password="pass";

$query = 'SELECT *
            FROM `user` 
           WHERE `username` = :username';
           
$stmt = $conn->prepare($query);

$stmt->bindValue("username", $username, PDO::PARAM_STR);


$stmt->execute();

$user = $stmt->fetch();


if ($user) {
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    if (password_verify($password, $hashedPassword)) {
        // Authenticated.
        if (password_needs_rehash($hashedPassword, PASSWORD_DEFAULT)) {
            // Rehash, update database.
        }

        $Tools->success("User data", $user);
    } else {
        $Tools->error(400, "Error! The password is wrong.");
    }
} else {
    $Tools->error(400, "Error! User does not exist.");
}
