<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$sql = 'select * from users';
$result = Database::getResultFromQuery($sql);

$user = new User(['name' => 'Lucas', 'email' => 'lucascod3r.com.br']);
print_r($user);
echo 'Fim!';