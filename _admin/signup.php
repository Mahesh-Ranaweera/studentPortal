<?php
    include '../_app/db.php';
    include '../_app/admin.php';
    include '../_app/query.php';
    include '../_app/config.php';
    include '../_templates/template.php';
    web_header(config('site_header'));
?>

<form method='post' action=''>
    <input type='email' name='email'>
    <input type='password' name='passw'>
    <input type='submit' name='btnAdmin' value='Submit'>
</form>
