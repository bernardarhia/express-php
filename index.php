<?php
include "Express.php";

$express = new Express();
$router = $express->router();

$router->get("/", function ($req,  $res) {
    $res->status(400)->send("Hello World");
});

$router->get("/users", function ($req,  $res) {
    $res->status(400)->send("Hello World");
});