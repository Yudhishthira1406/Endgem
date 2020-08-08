<?php

$conn= new mysqli("localhost","root","Divye-2001","myDB");

// Check connection


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>