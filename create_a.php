<?php
// Create connection
$conn = mysqli_connect("localhost","root","");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$a = "CREATE DATABASE dbms";
$b = "USE dbms";
$sql1="CREATE TABLE user(user_name VARCHAR(11) PRIMARY KEY NOT NULL, password INT(31)NOT NULL,phone_number INT(11),payment_mode VARCHAR(31))";

$sql2="CREATE TABLE books(app_id INT(11) PRIMARY KEY NOT NULL,name VARCHAR(31),author VARCHAR(11),publisher VARCHAR(15) NOT NULL,pages INT(11),theam VARCHAR(31),no_of_downloads INT(100),size INT(10),price INT(10),app_rating VARCHAR(31))";
$sql3="CREATE TABLE games(app_id INT(11) PRIMARY KEY NOT NULL,name VARCHAR(31),type VARCHAR(11),company VARCHAR(15) NOT NULL,ram INT(11),no_of_downloads INT(100),size INT(10),price INT(10),app_rating VARCHAR(31))";

$sql4="CREATE TABLE movie(app_id INT(11) PRIMARY KEY NOT NULL,name VARCHAR(31),duration VARCHAR(11),quality VARCHAR(15) NOT NULL,genre VARCHAR(11),no_of_downloads INT(100),size INT(10),price INT(10),app_rating VARCHAR(31))";

$sql5="CREATE TABLE music(app_id INT(11) PRIMARY KEY NOT NULL,name VARCHAR(31),duation VARCHAR(11),quality VARCHAR(15) NOT NULL,genre VARCHAR(30),no_of_downloads INT(100),size INT(10),price INT(10),app_rating VARCHAR(31))";

$sql6="CREATE TABLE social(app_id INT(11) PRIMARY KEY NOT NULL,name VARCHAR(31),catagories VARCHAR(11),no_of_downloads INT(100),size INT(10),price INT(10),app_rating VARCHAR(31))";
$sql7="CREATE TABLE comments(app_id INT(15)  NOT NULL,user_name VARCHAR(15),comments varchar(20) NOT NULL,rating INT(31),FOREIGN KEY(app_id) REFERENCES movie(app_id),FOREIGN KEY(user_name) REFERENCES user(user_name))";


mysqli_query($conn, $a);
mysqli_query($conn, $b);
mysqli_query($conn,$sql1);
mysqli_query($conn,$sql2);
mysqli_query($conn,$sql3);
mysqli_query($conn,$sql4);
mysqli_query($conn,$sql5);
mysqli_query($conn,$sql6);
mysqli_query($conn,$sql7);
mysqli_close($conn);


?>