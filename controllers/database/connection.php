<?php
/**
 * Created by IntelliJ IDEA.
 * User: hiruu
 * Date: 3/18/19
 * Time: 5:46 PM
 */

$serverName = "127.0.0.1";
$username = "root";
$password = "123";
$database = "ialevel";
$port = "3306";

$connection = mysqli_connect($serverName,$username,$password,$database,$port);

if(!$connection){
    die("connection failed: " . mysqli_connect_error());
}