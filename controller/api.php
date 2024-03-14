<?php 
require baseUrl('model/Role.php');
require baseUrl('database/Database.php');
$config = require baseUrl('config/credential.php');

$db = new Database($config);
