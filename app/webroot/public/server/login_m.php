<?php

require "./../../conf/config.php";
require "./../../lib/function.php";
require "./../../vendor/autoload.php";

$username = $_POST['username'];
$password = $_POST['password'];
$db = new \Medoo\Medoo([
    'database_type' => 'mysql',
    'database_name' => DB_NAME,
    'server' => DB_HOST,
    'username' => DB_USER,
    'password' => DB_PASSWORD
]);

$user = $db->get("user", "*", [
    'username' => $username,
    'password' => $password,
]);

if ($user) {
    $_SESSION['login_admin'] = $user['username'];
    ajaxReturn(200, "登陆成功");
} else {
    $_SESSION['login_admin'] = null;
    ajaxReturn(404, "登陆失败，检查用户名密码");
}
