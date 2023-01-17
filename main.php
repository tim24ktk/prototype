<?php

spl_autoload_register(function ($className) {
  require_once "{$className}.php";
});

$garden = new Garden();
$products = $garden->getProducts();

print("Было собрано:<br>" . PHP_EOL);
print("яблок -> {$products['apple']['quantity']} шт.<br>" . PHP_EOL);
print("груш -> {$products['pear']['quantity']} шт.<br>" . PHP_EOL);
