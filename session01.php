<?php
// セッションを利用します
session_start();

$name = 'あべ';
$age = '12';
// echo $name . $age;

$_session['name'] = $name;
$_session['age'] = $age;

$id = session_id();
echo $id;