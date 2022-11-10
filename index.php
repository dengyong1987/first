<?php
require "vendor/autoload.php";
try {
    $a = new \Dengyong\Blog\Test();
    $a->a();
} catch (Throwable $e) {
    var_dump($e->getMessage());
}