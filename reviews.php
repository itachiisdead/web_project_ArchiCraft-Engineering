<?php

function getReviews()
{
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "db";
    $conn = mysqli_connect($host, $user, $pass, $db);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM reviews";
    $result = $conn->query($sql);

    $reviews = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $reviews[] = $row;
        }
    }

    $conn->close();

    return $reviews;
}

function generateStars($rating)
{
    $fullStars = floor($rating);
    $halfStar = ceil($rating - $fullStars);
    $emptyStars = 5 - $fullStars - $halfStar;

    $stars = str_repeat('<i class="fas fa-star"></i>', $fullStars);
    $stars .= str_repeat('<i class="fas fa-star-half-alt"></i>', $halfStar);
    $stars .= str_repeat('<i class="far fa-star"></i>', $emptyStars);

    return $stars;
}
?>
