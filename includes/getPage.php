<?php
/*
 * Get page info for:
 * Page 1
 * Page 2
 */

$sth = $dbh->prepare("SELECT * FROM pages WHERE id = 1");
$sth->execute();
$results = $sth->fetch();
$home =  $results;

$sth = $dbh->prepare("SELECT * FROM pages WHERE id = 2");
$sth->execute();
$results = $sth->fetch();
$contact = $results;