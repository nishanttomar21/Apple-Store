<?php
// Create connection
$conn = mysqli_connect("localhost","root","");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$a = "CREATE DATABASE dbms";
$b = "USE dbms";
$sql1="CREATE TABLE user(user_id INT(11) PRIMARY KEY NOT NULL,name VARCHAR(31)NOT NULL,mail VARCHAR(40) NOT NULL,phone INT(11),address VARCHAR(21),age INT(11),user_type varchar(20),city VARCHAR(20),Password varchar(20))";

$sql2="CREATE TABLE buyer(user_id INT(11) PRIMARY KEY NOT NULL,city VARCHAR(11),property_type VARCHAR(15) NOT NULL,max_budget INT(11),area VARCHAR(31),FOREIGN KEY(user_id) REFERENCES user(user_id),Password varchar(20))";

$sql3="CREATE TABLE seller(user_id INT(11) PRIMARY KEY NOT NULL,property_for VARCHAR(11),property_type VARCHAR(20),expected_cost INT(10),FOREIGN KEY(user_id) REFERENCES user(user_id),Password varchar(20))";

$sql4="CREATE TABLE property(property_id INT(11) PRIMARY KEY NOT NULL,area INT(15) NOT NULL,city VARCHAR(11),per_unit_price INT(11),property_type VARCHAR(20),no_of_room INT(2),Password varchar(20))";

$sql5="CREATE TABLE description(property_id INT(11) PRIMARY KEY NOT NULL,plot_no INT(15),city VARCHAR(11),property_type VARCHAR(11),FOREIGN KEY(property_id) REFERENCES property(property_id))";

$sql6="CREATE TABLE broker(bid INT(15) PRIMARY KEY NOT NULL,bname VARCHAR(15),property_id INT(10),Password varchar(20) NOT NULL,FOREIGN KEY(property_id) REFERENCES property(property_id))";

$sql7="CREATE TABLE agent(aid INT(11)PRIMARY KEY NOT NULL,aname VARCHAR(31) NOT NULL,property_id INT(11),Password varchar(20) NOT NULL,FOREIGN KEY(property_id) REFERENCES property(property_id))";

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