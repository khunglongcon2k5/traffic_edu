<?php

$conn = new mysqli("localhost", "root", "", "traffic");

if ($conn->connect_error)
    die("Kết nối không thành công" . $conn->connect_error);
