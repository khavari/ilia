<?php
/**
 * Submit user edit form.
 * /admin/users_edit.php?id=1
 * Submit name: user_edit
 */
if (isset($_POST['user_edit'], $_GET['id']) && exist_user($_GET['id'])) {

    $id = $_GET['id'];
    $password = (strlen(trim($_POST['password'])) >= 6) ? md5(trim($_POST['password'])) : user($id, 'password');

    $data = array(
        'name'       => trim($_POST['name']),
        'family'     => trim($_POST['family']),
        'gender'     => trim($_POST['gender']),
        'email'      => strtolower(trim($_POST['email'])),
        'mobile'     => trim($_POST['mobile']),
        'role'       => trim($_POST['role']),
        'address'    => trim($_POST['address']),
        'status'     => trim($_POST['status']),
        'password'   => $password,
        'updated_at' => date('y-m-d H:i:s'),
    );

    if (user_update($id, $data)) {
        set_message("success", "The update operation was successfully.");
        header('Location: users.php');
    } else {
        set_message("error", "The update operation was failed.");
    }

}

/**
 * Submit user create form.
 * /admin/user_create.php
 * Submit name: user_create
 */
if (isset($_POST['user_create'])) {

    $data = array(
        'name'       => trim($_POST['name']),
        'family'     => trim($_POST['family']),
        'gender'     => trim($_POST['gender']),
        'email'      => strtolower(trim($_POST['email'])),
        'mobile'     => trim($_POST['mobile']),
        'role'       => trim($_POST['role']),
        'address'    => trim($_POST['address']),
        'status'     => trim($_POST['status']),
        'password'   => md5(trim($_POST['password'])),
        'created_at' => date('y-m-d H:i:s'),
    );

    if (user_create($data)) {
        set_message("success", "The create operation was successfully.");
        header('Location: users.php');
    } else {
        set_message("error", "The create operation was failed.");
    }

}


/**
 * Submit user delete form.
 * /admin/users.php
 * Submit name: user_delete
 */
if (isset($_POST['user_delete'], $_POST['user_id']) && exist_user($_POST['user_id'])) {

    $id = $_POST['user_id'];
    if (user_delete($id)) {
        set_message("success", "The delete operation was successfully.");
        header('Location: users.php');
    } else {
        set_message("error", "The delete operation was failed.");
    }

}


/**
 * Submit login form
 * /admin/login.php
 */
if (isset($_POST['user_login'])) {
    $data = array(
        'email'    => strtolower(trim($_POST['email'])),
        'password' => trim($_POST['password']),
    );

    if (do_login($data)) {
        header('Location: index.php');
    } else {
        set_message("error", "The email or password is incorrect");
    }

}


if (isset($_GET['logout']) && $_GET['logout'] == 'true') {
    unset($_SESSION['user']);
    header('Location: login.php');
}


if (isset($_POST['send_sms'], $_POST['user_id']) && exist_user($_POST['user_id'])) {

    $id = $_POST['user_id'];
    $mobile = user($id, "mobile");

    $message = urlencode("Hi \r\n username:ali");
    $token = SMS_TOKEN;
    file_get_contents("https://api.kavenegar.com/v1/$token/sms/send.json?receptor=$mobile&message=$message");
    set_message("success", "Success");
}
