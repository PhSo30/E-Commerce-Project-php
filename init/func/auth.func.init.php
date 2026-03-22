<?php

function usernameExist($username)
{
    global $db;
    $query = $db->prepare('SELECT * FROM tbl_users WHERE username = ?');
    $query->bind_param('s', $username);
    $query->execute();
    $result = $query->get_result();
    if ($result->num_rows) {
        return true;
    }
    return false;
}
function emailExist($email)
{
    global $db;
    $query = $db->prepare('SELECT * FROM tbl_users WHERE email = ?');
    $query->bind_param('s', $email);
    $query->execute();
    $result = $query->get_result();
    if ($result->num_rows) {
        return true;
    }
    return false;
}
function registerUser( $username, $email, $passwd)
{
    global $db;
    $query = $db->prepare('INSERT INTO tbl_users (username,email,passwd) VALUES (?,?,?)');
    $query->bind_param('sss', $username, $email, $passwd);
    $query->execute();

    if ($query->affected_rows) {
        return true;
    }
    return false;
}

function loginUser($username, $passwd)
{
    global $db;
    $query = $db->prepare('SELECT * FROM tbl_users WHERE (username = ? OR email = ?) AND passwd = ?');
    $query->bind_param('sss', $username, $username, $passwd);
    $query->execute();
    $result = $query->get_result();
    if ($result->num_rows) {
        return $result->fetch_object();
        // return true;
    }
    return false;
}
?>