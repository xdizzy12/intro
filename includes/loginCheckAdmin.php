<?php
/*
 * @ Mathieu Haverkamp
 *
 * This file extends the functionality of loginCheck.php by also checking for admin rights
 * It should only be included on pages which only the admin can see
 */
$admin = 'admin';

if($_SESSION['user_permissions'] !== $admin) {
    // if user isn't logged in as admin redirect to homepage
    header('Location: homePage.php');
    die();
}