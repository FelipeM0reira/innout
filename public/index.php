<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User(['name' => 'Lucas', 'email' => 'lucascod3r.com.br']);
// echo $user->getSelect();

echo User::getSelect(['name' => 'Chaves'], 'name, email');