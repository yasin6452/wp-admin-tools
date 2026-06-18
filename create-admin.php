<?php
require('wp-load.php');
$user_id = wp_create_user('username_admin', 'pass_admin', 'Email_admin');
$user = new WP_User($user_id);
$user->set_role('administrator');
echo 'Admin created!';
?>