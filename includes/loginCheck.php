<?php
/**
 * @ Mathieu Haverkamp
 *
 * This PHP file needs to be included on every /admin/ page. This will perform a check if certain sessions exist
 * and send users back to the login screen upon failure
 *
 * SESSIONS: 'user_name' && 'user_id' && 'user_status' && 'user_permissions'
 */
$banned = 'offline';

if(empty($_SESSION['user_name']) || empty($_SESSION['user_id']) || !isset($_SESSION['user_name'], $_SESSION['user_id']) || $_SESSION['user_status'] == $banned) {
    // USER NOT LOGGED IN
    // get current filename
    $pageName = basename($_SERVER['PHP_SELF']);
    // if page != login page (index.php) redirect user to login page (index.php)
    if($pageName !== 'index.php') {
        header('Location: index.php');
    }
} else {
    // USER LOGGED IN
    // get current filename
    $pageName = basename($_SERVER['PHP_SELF']);
    // if user is on login page (index.php) redirect to CMS homepage
    if($pageName == 'index.php') {
        header('Location: homePage.php');
    }
}