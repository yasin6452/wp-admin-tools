<?php
require('wp-load.php');

$creds = array(
    'user_login'    => 'user_admin',
    'user_password' => 'pass_admin',
    'remember'      => false
);

$user = wp_signon($creds, false);

if(is_wp_error($user)) {
    echo 'Error: ' . $user->get_error_message();
} else {
    echo 'Login OK! User: ' . $user->user_login;
}
?>