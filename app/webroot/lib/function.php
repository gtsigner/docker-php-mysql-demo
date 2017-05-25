<?php

function ajaxReturn($code = 200, $msg = "success", $data = null)
{
    $json['code'] = $code;
    $json['msg'] = $msg;
    $json['data'] = $data;
    header('Content-type: application/json');
    exit(json_encode($json));
}

function checkAdminLogin()
{
    if (!array_key_exists("login_admin", $_SESSION)) {
        return false;
    } else {
        $login = $_SESSION['login_admin'];
        if ($login) {
            return true;
        } else {
            return false;
        }
    }
}