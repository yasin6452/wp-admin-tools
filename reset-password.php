<?php
require('wp-load.php');
$user = get_user_by('login', 'User_admin');
wp_set_password('newPassword', $user->ID);
echo 'Password reset done!';
?>