<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Validate;

$email = Validate::email('nombre@pagina.com');

echo '<pre>';
var_dump($email);
echo '</pre>';

$url = Validate::url('https://platzi.com');

echo '<pre>';
var_dump($url);
echo '</pre>';