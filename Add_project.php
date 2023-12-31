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
            <li class="active">
                <a href="Add_project.php">
                    <i class='bx bx-plus'></i>
                    <span class="text">Add project</span>
                </a>
            </li>
            <li>
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
                            <a class="active" href="#">Add project</a>
                        </li>
                    </ul>
                </div>
            </div>


            <div class="form-container">
                <form class="edit-form" id="projects" method="post" action="add.php">
                    <div>
                        <label for="id">ID</label>
                        <input type="number" id="id" name="id">
                    </div>
                    <div>
                        <label for="file">Image</label>
                        <input type="file" id="file" name="img-src">
                    </div>
                    <div>
                        <label for="file2">Image</label>
                        <input type="file" id="file2" name="img-src2">
                    </div>
                    <div>
                        <label for="file3">Image</label>
                        <input type="file" id="file3" name="img-src3">
                    </div>
                    <div>
                        <label for="file4">Image</label>
                        <input type="file" id="file4" name="img-src4">
                    </div>
                    <div>
                        <label for="title">Title</label>
                        <input type="text" placeholder="project title" name="title" id="title">
                    </div>
                    <div>
                        <label for="architect">Architect</label>
                        <input type="text" placeholder="architect" name="architect" id="architect">
                    </div>
                    <div>
                        <label for="category">Category</label>
                        <input type="text" placeholder="category" name="category" id="category">
                    </div>
                    <div>
                        <label for="description">Description</label>
                        <textarea name="description" id="description"></textarea>
                    </div>
                    <div>
                        <label for="price">Price Range</label>
                        <input type="text" placeholder="price range" name="price" id="price">
                    </div>
                    <button id="add" type="submit">Add</button>




                </form>

            </div>

            <script src="dash.js"></script>
</body>

</html>