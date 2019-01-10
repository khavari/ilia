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

