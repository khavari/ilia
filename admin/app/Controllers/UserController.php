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
        'name'     => trim($_POST['name']),
        'family'   => trim($_POST['family']),
        'gender'   => trim($_POST['gender']),
        'email'    => strtolower(trim($_POST['email'])),
        'mobile'   => trim($_POST['mobile']),
        'role'     => trim($_POST['role']),
        'address'  => trim($_POST['address']),
        'password' => $password,
    );

    if (user_update($id, $data)) {
        set_message("success", "The update operation was successfully.");
        header('Location: users.php');
    } else {
        set_message("error", "The update operation was failed.");
    }

}
