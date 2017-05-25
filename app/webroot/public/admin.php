<?php

require "./../conf/config.php";
require "./../lib/function.php";
require "./../vendor/autoload.php";
if (!checkAdminLogin()) {
    header("Location:./login.php");
    exit();
}

$db = new \Medoo\Medoo(array(
    'database_type' => 'mysql',
    'database_name' => DB_NAME,
    'server' => DB_HOST,
    'username' => DB_USER,
    'password' => DB_PASSWORD
));
$data_list = $db->select("data", "*", [
    "ORDER" => [
        'create_time' => 'DESC'
    ],
]);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>数据列表-显示</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="row">
            <div class="x_title">
                <h2 class="text-center">数据列表 </h2>
            </div>
            <div class="x_content">
                <table class="table table-striped table-bordered table-responsive">
                    <thead>
                    <tr class="headings">
                        <th>
                            <input type="checkbox" id="check-all" class="flat">
                        </th>
                        <th class="column-title">名字</th>
                        <th class="column-title">年龄</th>
                        <th class="column-title">电子邮件</th>
                        <th class="column-title">电话号码</th>
                        <th class="column-title">地区</th>
                        <th class="column-title">输入2</th>
                        <th class="column-title">输入3</th>
                        <th class="column-title">输入4</th>
                        <th class="column-title">内容</th>
                        <th class="column-title">新增时间</th>
                    </tr>
                    </thead>

                    <tbody>

                    <?php
                    foreach ($data_list as $row) {
                        ?>
                        <tr class="even pointer">
                            <td class="a-center ">
                                <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" "><?php echo $row['name'] ?></td>
                            <td class=" "><?php echo $row['age'] ?> </td>
                            <td class=" "><?php echo $row['email'] ?> </td>
                            <td class=" "><?php echo $row['tel'] ?></td>
                            <td class=" "><?php echo $row['region'] ?></td>
                            <td class=""><?php echo $row['money'] ?></td>
                            <td class=" "><?php echo $row['num'] ?></td>
                            <td class=" "><?php echo $row['year'] ?></td>
                            <td class=" "><?php echo $row['note'] ?></td>
                            <td class=" "><?php echo date("Y-m-d H:i:s", $row['create_time']); ?></td>
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</body>
</html>