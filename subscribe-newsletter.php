<?php

$conn = mysqli_connect("localhost", "root", "", "tutorials");
$subscriberEmail = $_POST["subscriberEmail"];

mysqli_query($conn, "INSERT INTO subscribers (email) VALUES ('$subscriberEmail')");
