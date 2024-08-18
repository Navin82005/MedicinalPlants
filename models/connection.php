<?php

$conn = new mysqli("localhost", "root", "", "medicinalplants");
if ($conn->connect_error) {
    echo "<script>alert('தரவு பெற முடியவில்லை');</script>";
    $conn = null;
}
