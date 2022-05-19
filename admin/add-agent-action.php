<?php
session_start();
require('../inc/db.php');
//treat my input
function treat($text)
{
    $text = trim($text);
    $text = stripslashes($text);
    $text = htmlspecialchars($text);
    return $text;
}

$response = [];
$res = json_decode(file_get_contents('php://input'), true);

if (empty(treat($res['fullname']))) {
    $response['fullnameErr'] = "Full Name is required";
} else {
    $fullname = treat($res['fullname']);
}
if (empty(treat($res['username']))) {
    $response['usernameErr'] = "Userame is required";
} else {
    $username = treat($res['username']);
}
if (empty(treat($res['phone']))) {
    $response['phoneErr'] = "Phone is required";
} else {
    $phone = treat($res['phone']);
}
if (empty(treat($res['lg']))) {
    $response['lgErr'] = "LG is required";
} else {
    $lg = treat($res['lg']);
}
if (empty(treat($res['poll']))) {
    $response['pollErr'] = "Poll Unit is required";
} else {
    $poll = treat($res['poll']);
}
if (empty(treat($res['ward']))) {
    $response['wardErr'] = "ward is required";
} else {
    $ward = treat($res['ward']);
}
if (empty(treat($res['role']))) {
    $response['roleErr'] = "You have to select one";
} else {
    $role = treat($res['role']);
}
if (empty(treat($res['password']))) {
    $response['passwordErr'] = "Password is required";
}else {
    $password =  md5(treat($res['password']));
    $real_password = treat($res['password']);
}

if (!$response) {
    $slug = str_replace(' ', '-', $fullname . '-' . $phone . '-' . $lg);
    $check = $dbc->prepare("SELECT * FROM admin_user WHERE username =?");
    $check->bind_param('s', $username);
    $check->execute();
    $result = $check->get_result();
    if ($result->num_rows > 0) {
        $response['exist'] = "Username Already Exist.";
    } else {
        $insert = $dbc->prepare("INSERT INTO admin_user(name, username, phone, password, real_password, lg, ward, poll_unit, role, slug) 
        VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ");
        $insert->bind_param('ssssssssss', $fullname, $username, $phone, $password, $real_password, $lg, $ward, $poll, $role, $slug);
        if ($insert->execute()) {
            $response['success'] = "User Added Successfully.";
            $response['username'] = $username;
            $response['password'] = $real_password;
        }
    }
}
echo json_encode($response);
