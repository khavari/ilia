<?php
/**
 * return all users from users table
 *
 * @return array
 */
function get_users()
{
    $conn = connection();
    $query = $conn->prepare("SELECT * FROM users");
    $query->execute();
    $users = $query->fetchAll();

    return $users;
}

/**
 * Find user via id and return the specified field
 *
 * @param $id
 * @param $field
 *
 * @return int,string,bool
 */
function user($id, $field)
{
    $conn = connection();
    $query = $conn->prepare("SELECT * FROM users WHERE id = ?");
    $query->execute([$id]);
    $user = $query->fetch();

    return $user[$field];
}

/**
 * Check the user exist or no via specified  id
 *
 * @param $id
 *
 * @return bool
 */
function exist_user($id)
{
    $conn = connection();
    $query = $conn->prepare("SELECT count(*) as 'count' FROM users WHERE id = ?");
    $query->execute([$id]);
    $user = $query->fetch();

    return ($user['count']) ? true : false;
}

/**
 * Update the specified user.
 *
 * @param $id
 * @param $data
 *
 * @return bool
 */
function user_update($id, $data)
{
    $conn = connection();
    $sql = "UPDATE users SET role = ?,email = ?,password = ?,name = ?,family =?,gender = ?,mobile = ?,address = ?,status = ?,updated_at = ? WHERE id = ?";
    $query = $conn->prepare($sql);
    $result = $query->execute([
        $data['role'],
        $data['email'],
        $data['password'],
        $data['name'],
        $data['family'],
        $data['gender'],
        $data['mobile'],
        $data['address'],
        $data['status'],
        $data['updated_at'],
        $id,
    ]);

    return $result;
}


/**
 * Create new user.
 *
 * @param $data
 *
 * @return bool
 */
function user_create($data)
{
    $conn = connection();
    $sql = "INSERT INTO users(role, email, password, name, family, gender, mobile, address, status, created_at) VALUES (?,?,?,?,?,?,?,?,?,?)";
    $query = $conn->prepare($sql);
    $result = $query->execute([
        $data['role'],
        $data['email'],
        $data['password'],
        $data['name'],
        $data['family'],
        $data['gender'],
        $data['mobile'],
        $data['address'],
        $data['status'],
        $data['created_at'],
    ]);

    return $result;
}


/**
 * Delete the specified user
 *
 * @param $id
 *
 * @return bool
 */
function user_delete($id)
{
    $conn = connection();
    $sql = "DELETE FROM `users` WHERE id = ? LIMIT 1";
    $query = $conn->prepare($sql);
    $result = $query->execute([$id]);

    return $result;
}
