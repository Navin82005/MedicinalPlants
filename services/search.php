<?php
include("../models/connection.php");

if (isset($_POST["search_plants_btn"])) {
    // Prepare and execute the SQL statement
    $sql = $conn->prepare("SELECT * FROM Herbs WHERE common_name LIKE ?");
    $search = "%" . $_POST['search_plants'] . "%";
    $sql->bind_param("s", $search);
    $sql->execute();

    // Check for errors
    if ($sql->errno) {
        echo "Error executing statement: " . $sql->error;
    } else {
        // Fetch results
        $result = $sql->get_result();

        // Check if any rows were found
        if ($result->num_rows > 0) {
            // Start session to pass data to next page
            session_start();

            // Store search results in session variable
            $_SESSION['search_results'] = $result->fetch_all(MYSQLI_ASSOC);

            // Redirect to single-description.php
            header("Location: ../views/single-description.php");
            exit(); // Stop further execution of current script
        } else {
            echo "No results found.";
        }
    }

    // Close the prepared statement and the database connection
    $sql->close();
    $conn->close();
}