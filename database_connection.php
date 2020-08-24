<?php

$connect = new PDO("mysql:host=localhost;dbname=todoList", "root", "");

session_start();

$_SESSION["user_id"] = "1";

?>