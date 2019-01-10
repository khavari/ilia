<?php

/**
 * Return new PDO database connection
 *
 * @return \PDO
 */
function connection()
{
    $host = DB_HOST;
    $database = DB_DATABASE;
    $connection = new PDO("mysql:host=$host;dbname=$database", DB_USERNAME, DB_PASSWORD);

    return $connection;
}

/**
 * Return the page url with query string if has query string.
 * /admin/users.php
 * /admin/users_edit.php?id=1
 *
 * @return string
 */
function current_url()
{
    if (empty($_SERVER['QUERY_STRING'])) {
        $query_string = '';
    } else {
        $query_string = '?' . $_SERVER['QUERY_STRING'];
    }

    return $_SERVER['PHP_SELF'] . $query_string;
}


/**
 * Set session for flash message
 * success & success_time
 * error & error_time
 *
 * @param $type
 * @param $message
 */
function set_message($type, $message)
{
    $_SESSION[$type] = $message;
    $_SESSION[$type . '_time'] = time();
}

/**
 * Return the specified session if is set.
 * success or error
 *
 * @param $type
 *
 * @return null
 */
function get_message($type)
{
    if (isset($_SESSION[$type])) {
        return $_SESSION[$type];
    }

    return null;
}

/**
 * Check the specified session is set or no.
 * Unset the specified session if is expired.
 *
 * @param $type
 *
 * @return bool
 */
function has_message($type)
{
    if (isset($_SESSION[$type], $_SESSION[$type . '_time'])) {
        $old_time = $_SESSION[$type . '_time'];
        if ((time() - $old_time) < 3) {
            return true;
        } else {
            unset($_SESSION[$type], $_SESSION[$type . '_time']);
        }

        return false;
    }

    return false;
}

/**
 * Check the specified records is updated or no.
 *
 * @param $updated_at
 *
 * @return bool
 */
function is_updated($updated_at)
{
    $now = time() - 60;
    $updated_at = strtotime($updated_at);
    if ($updated_at > $now) {
        return true;
    }

    return false;
}

function old($input)
{
    return $_REQUEST[$input] ?? null;
}
