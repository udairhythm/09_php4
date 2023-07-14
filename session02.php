<?php
session_start();

$_name = $_SESSION['name'];
$_age = $_SESSION['age'];

echo $name . $age;
