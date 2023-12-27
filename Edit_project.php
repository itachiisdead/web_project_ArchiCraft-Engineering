<?php
session_start();
$host = "localhost";
$user = "root";
$pass = "";
$db = "db";
$connect = mysqli_connect($host, $user, $pass, $db);
$edit_row=[];
if (isset($_GET['edit_id'])) {
    $edit_id = $_GET['edit_id'];
    $edit_query = "SELECT * FROM projects WHERE id = $edit_id";
    $edit_result = mysqli_query($connect, $edit_query);

    if ($edit_result) {
        $edit_row = mysqli_fetch_assoc($edit_result);
    } else {
        echo "Error fetching record for editing";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'] ?? '';
    $title = $_POST['title'] ?? '';
    $architect = $_POST['architect'] ?? '';
    $description = $_POST['desc'] ?? '';
    $price_range = $_POST['price'] ?? '';

    // Check if a file is uploaded
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $upload_folder = "imgs/";
        $image_name = uniqid() . "_" . $_FILES['image']['name'];
        $image_path = $upload_folder . $image_name;

        move_uploaded_file($_FILES['image']['tmp_name'], $image_path);
    } else {
        $image_path = $edit_row['image'];
    }

    $stmt = $connect->prepare("UPDATE projects SET image=?, title=?, architect=?, description=?, price_range=? WHERE id=?");
    $stmt->bind_param("sssssi", $image_path, $title, $architect, $description, $price_range, $id);
    if ($stmt->execute()) {
        header("Location: current_projects.php");
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    $stmt->close();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="dash.css">

    <title>AdminHub</title>
</head>


<body>

    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>
            <span class="text">AdminHub</span>
        </a>
        <ul class="side-menu top">
            <li>
                <a href="current_projects.php">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="text">Current projects</span>
                </a>
            </li>
            <li>
                <a href="Add_project.php">
                    <i class='bx bx-plus'></i>
                    <span class="text">Add project</span>
                </a>
            </li>
            <li class="active">
                <a href="Edit_project.php">
                    <i class='bx bxs-edit-alt'></i>
                    <span class="text">Edit project</span>
                </a>
            </li>
        </ul>

        <ul class="side-menu">
            <li>
                <a href="login-signup.html" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Logout</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link">Categories</a>
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>
            <div class="head-title">
                <div class="left">
                    <h1>Dashboard</h1>
                    <ul class="breadcrumb">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li><i class='bx bx-chevron-right'></i></li>
                        <li>
                            <a class="active" href="#">Edit project</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="form-container">
            <form method="post" class="edit-form" enctype="multipart/form-data">
                    <div>
                        <label for="id">ID</label>
                        <input type="number" id="id" name="id" value="<?php echo isset($edit_row['id']) ? $edit_row['id'] : ''; ?>" >
                    </div>

                    <div> Images 
                         <label for="image">Image</label>
                         <input type="file" name="image" id="image">
                         <img src="<?php echo isset($edit_row['image']) ? $edit_row['image'] : ''; ?>" alt="Current Image">
                          </div>
                  

                    <div>
                        <label for="title">Title</label>
                        <input type="text" placeholder="Project Title" name="title" id="title" value="<?php echo isset($edit_row['title']) ? $edit_row['title'] : ''; ?>" required>
                    </div>
                    <div >
                        <label for="architect">Architect</label>
                        <input type="text" placeholder="Architect" name="architect" id="architect" value="<?php echo isset($edit_row['architect']) ? $edit_row['architect'] : ''; ?>" required>
                    </div>
                    <div>
                        <label for="desc">Description</label>
                        <textarea name="desc" id="desc" required><?php echo isset($edit_row['description']) ? $edit_row['description'] : ''; ?></textarea>
                    </div>
                    <div>
                        <label for="price">Price Range</label>
                        <input type="text" placeholder="Price Range" name="price" id="price" value="<?php echo isset($edit_row['price_range']) ? $edit_row['price_range'] : ''; ?>" required>
                    </div>
                    <button type="submit" id="edit">Edit</button>
                </form>
            </div>
        </main>
    </section>

    <script src="dash.js"></script>


</body>

</html>