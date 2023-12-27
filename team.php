<?php

function connectToDatabase() {
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "db";
    $conn = mysqli_connect($host, $user, $pass, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    return $conn;
}

function getTeamMembers() {
    $conn = connectToDatabase();

    // Fetch team members from the database
    $sql = "SELECT * FROM team_members";
    $result = $conn->query($sql);
    $teamMembers = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $teamMembers[] = $row;
        }
    }

    $conn->close();

    return $teamMembers;
}
?>
