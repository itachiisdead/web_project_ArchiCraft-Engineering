<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $content = isset($_POST['content']) ? $_POST['content'] : '';
    $rating = isset($_POST['rating']) ? $_POST['rating'] : '';

    if (!is_numeric($rating) || $rating < 1 || $rating > 5) {
        die("Invalid rating");
    }

    // Process the uploaded photo
    $photoPath = uploadPhoto();

    // Save the testimonial to the database
    saveTestimonial($name, $content, $rating, $photoPath);
    header("Location: index.php");

   
    exit();
}

function uploadPhoto()
{
    $targetDirectory = "imgs/";
    $targetFile = $targetDirectory . basename($_FILES["photo"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["photo"]["tmp_name"]);
    if ($check === false) {
        die("File is not an image.");
    }

    // Check file size
    if ($_FILES["photo"]["size"] > 500000) {
        die("Sorry, your file is too large.");
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" &&
        $imageFileType != "jpeg" && $imageFileType != "gif"
    ) {
        die("Sorry, only JPG, JPEG, PNG & GIF files are allowed.");
    }

    // Move the uploaded file to the target directory
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $targetFile)) {
        return $targetFile;
    } else {
        die("Sorry, there was an error uploading your file.");
    }
}

function saveTestimonial($name, $content, $rating, $image_path)
{
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "db";
    $conn = mysqli_connect($host, $user, $pass, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $name = mysqli_real_escape_string($conn, $name);
    $content = mysqli_real_escape_string($conn, $content);
    $rating = mysqli_real_escape_string($conn, $rating);
    $image_path = mysqli_real_escape_string($conn, $image_path);

    $sql = "INSERT INTO reviews (name, content, rating, image_path) VALUES ('$name', '$content', '$rating', '$image_path')";
    $result = $conn->query($sql);

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="feedback.css">
    <title>Write a Testimonial</title>
</head>

<body>

    <div class="container">
        <h1>Write a Testimonial</h1>
        <form id="testimonialForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
            <label for="name">Your Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="content">Testimonial:</label>
            <textarea id="content" name="content" rows="4" required></textarea>

            <label for="rating">Rating (1-5):</label>
            <input type="number" id="rating" name="rating" min="1" max="5" required>

            <label for="photo">Your Photo:</label>
            <input type="file" id="photo" name="photo" accept="image/*" required>

            <button type="submit">Submit </button>
        </form>
    </div>

</body>

</html>
