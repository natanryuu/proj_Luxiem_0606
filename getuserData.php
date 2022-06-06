<?php
require './parts/connect-db.php';
// echo $_POST['email'];

$email = isset($_GET['memberEmail']) ? trim($_GET['memberEmail']) : '';
$emailsql = 'SELECT `user_img`,`user_name` FROM `members` WHERE `user_email`= (?)';

$emailstmt = $pdo->prepare($emailsql);
$emailstmt->execute([$email]);
$emailrow = $emailstmt->fetch();

echo json_encode($emailrow,JSON_UNESCAPED_UNICODE);

