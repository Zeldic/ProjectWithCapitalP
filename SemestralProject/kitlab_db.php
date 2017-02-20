<?php
$database = 'ete52e_1617zs_03';
$username = 'ete52e_1617zs_03';
$password = 'O2aqMj';

if (!($cnn = mysql_connect('localhost', $username, $password)))
	die('Unable to connect to the database server.');
if (!mysql_select_db($database, $cnn))
	die('Unable to open database.');

echo 'Connection to database was successful.';
