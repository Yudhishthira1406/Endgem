<?php

include 'connection.php';

$sql="UPDATE ".$_REQUEST["r"]." set downloads=downloads+1
        where notesType='".$_REQUEST["q"]."';";

$conn->query($sql);
$sql1="Select downloads from ".$_REQUEST["r"]." where notesType='".$_REQUEST["q"]."';";
$result=$conn->query($sql1);
$row=$result->fetch_array(MYSQLI_NUM);
echo $row[0]["downloads"];

?>