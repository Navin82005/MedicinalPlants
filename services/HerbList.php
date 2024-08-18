<?php
include ("models/connection.php");

$sql = "SELECT * FROM herbs";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    $herb_data = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $herb_data[] = $row;
    }
    $total_pages = ceil(count($herb_data) / 6);

    $_SESSION['herb_data'] = $herb_data;

    mysqli_free_result($result);
}