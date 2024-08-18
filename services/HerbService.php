<?php

require_once ("../models/connection.php");

function getPlantFromDesk($plant)
{
    global $conn;
    $sql = $conn->prepare("SELECT * FROM Herbs WHERE common_name LIKE ?");
    $search = "%" . $plant . "%";
    $sql->bind_param("s", $search);
    $sql->execute();


    if ($sql->errno) {
        error_log("Error executing statement: " . $sql->error);
        return "Error fetching plant information.";
    }


    $result = $sql->get_result();


    if ($result->num_rows > 0) {
        $plantInfo = $result->fetch_assoc();
        $herbId = $plantInfo["id"];


        $sql = $conn->prepare("SELECT * FROM herb_desk WHERE herb_id = ?");
        $sql->bind_param("s", $herbId);
        $sql->execute();


        if ($sql->errno) {

            error_log("Error executing statement: " . $sql->error);
            return "Error fetching plant details.";
        }


        $result = $sql->get_result();


        if ($result->num_rows > 0) {
            return $result->fetch_all(MYSQLI_ASSOC)[0];
        } else {
            return "Plant not found.";
        }
    } else {
        return "Plant not found.";
    }

}

// var_dump(getPlantFromDesk("துளசி")["indications"]);
