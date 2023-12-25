<?PHP
    session_start();
    $host="localhost";
        $user="root";
        $pass="";
        $db="db";
       $connect= mysqli_connect($host,$user,$pass,$db); 

    $projects= "select * from projects ";
    $q=mysqli_query($connect,$projects);
    $rows = $q -> fetch_all(MYSQLI_ASSOC);

    ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">

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
        <li class="active">
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
        <li>
            <a href="Edit_project.php">
                <i class='bx bxs-edit-alt'></i>
                <span class="text">Edit project</span>
            </a>
        </li>
    </ul>
    <ul class="side-menu">
        <li>
            <a href="#" class="logout">
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
                            <a class="active" href="#">current projects</a>
                        </li>
                    </ul>
                </div>
            </div>
<table class="table" id="table" >
    <thead>
        <tr>
            <th >ID</th>
            <th >Title</th>
            <th >architect</th>
            <th >price_range</th>
            <th >Edit/ Delete</th>
        </tr>
      
    </thead>
    <tbody>
    <?php
                foreach ($rows as $row){     
                echo"<td>".$row['id']."</td>";
                echo"<td>".$row['title']."</td>";
                echo"<td>".$row['architect']."</td>";
                echo"<td>".$row['price_range']."</td>";
                echo "<td>";
                echo '<button name="btnedti" type="button" class="btn btn-success edit"><a href="Edit_project.php">Edit</a></button>'; 
                echo '<button name="btndel" onclick="myFunction()" type="button" class="btn btn-danger">Delete</button>';
                echo "</td>";

                echo"</tr>";
            }
                    ?>
 
      
    </tbody>
</table>

            <script src="script.js">

function myFunction() {
  fetch('delete.php')
    .then(response => response.text())
    .then(data => {
      // Handle the response from the PHP script
    });
}
            </script>

            

</body>

</html>