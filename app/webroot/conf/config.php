<?php
header("ContentType:text/html;charset:utf8");

session_start();//放在第一行
ini_set("display_errors", "on");

define("DB_HOST", "mysql-db");
define("DB_NAME", "table_v1");
define("DB_USER", "root");
define("DB_PASSWORD", "zhaojun");
define("DB_PORT", "3306");