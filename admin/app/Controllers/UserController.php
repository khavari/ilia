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
