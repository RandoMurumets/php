<?php

require_once 'conf.php';
require_once 'db_fnk.php';
$iktConn = connect_db('localhost', 'rando_user','userpassword', 'randomur_php');
echo '<pre>';
print_r($iktConn);
echo '</pre>';

?>