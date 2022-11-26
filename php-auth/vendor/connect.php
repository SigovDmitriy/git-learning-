<?php
session_start();
//mysqli_connect
$connect = mysqli_connect('localhost','root','', 'test');
if(!$connect) {
    die('Error connect to database');
}
