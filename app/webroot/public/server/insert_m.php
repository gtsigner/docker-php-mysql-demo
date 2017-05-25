<?php

require "./../../conf/config.php";
require "./../../lib/function.php";
require "./../../vendor/autoload.php";


$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$region = $_POST['region'];
$money = $_POST['money'];
$num = $_POST['num'];
$year = $_POST['year'];
$note = $_POST['note'];

$db = new \Medoo\Medoo(array(
    'database_type' => 'mysql',
    'database_name' => DB_NAME,
    'server' => DB_HOST,
    'username' => DB_USER,
    'password' => DB_PASSWORD
));

$ret = $db->insert("data", array(
    'name' => $name,
    'age' => $age,
    'email' => $email,
    'tel' => $tel,
    'region' => $region,
    'money' => $money,
    'num' => $num,
    'year' => $year,
    'note' => $note,
    'create_time' => time(),
));

ajaxReturn(200, "提交数据成功", null);
