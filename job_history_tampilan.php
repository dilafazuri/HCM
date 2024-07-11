<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uas_database"; // Adjust as necessary

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch department data from the database
$sql = "SELECT * FROM job_history";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Departments</title>
    <style>
        body {
            font-family: poppins, sans-serif;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #f8f9fa;
            margin: 0;
            position: relative;
        }

        .container-fluid {
            display: flex;
            height: 100vh;
            width: 100vw;
            padding: 0;
        }

        .sidebar {
            background-color:#B0E0E6;
            width: 250px;
            padding: 20px;
            color: black;
            display: flex;
            flex-direction: column;
        }

        .sidebar a {
            color: black;
            text-decoration: none;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid black;
            border-radius: 5px;
            text-align: center;
        }

        .sidebar a:hover {
            text-decoration: underline;
            background-color: #95a5a6;
        }

        .main-content {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
        }

        .main-content h1 {
            margin-top: 0;
        }

        .main-content .table-container {
            margin-top: 20px;
        }

        .logo {
            position: fixed; /* Set to fixed position */
            top: 20px;
            right: 20px;
            width: 120px; /* Adjust the width of the logo */
            height: auto;
            z-index: 1000; /* Ensure it stays above other content */
        }
    </style>
</head>
<body>
<div class="container-fluid">
    <div class="sidebar">
        <h3>Human Resource Management</h3>
        <a href="employee_tampilan.php">Employees</a>
        <a href="location_tampilan.php">Location</a>
        <a href="department_tampilan.php">Department</a>
        <a href="job_tampilan.php">Job</a>
        <a href="job_history_tampilan.php">Job History</a>
        <a href="loc_dept_detail_tampilan.php">Location Department Detail</a>
        <a href="index.php">About Us</a>
    </div>
    <div class="main-content">
        <h1>Job History</h1>
        <div class="table-container">
            <?php
            include "db_connect.php";
            $query = mysqli_query($kon, "SELECT * FROM job_history") or die(mysqli_error($kon));
            $jumlah = mysqli_num_rows($query);

            echo "<a href='job_history_add.php' class='btn btn-info mb-3'>Input data baru disini</a><br>";
            if ($jumlah > 0) {
                echo '<table class="table table-bordered table-striped">';
                echo '<thead class="table-info"><tr><th>No</th><th>Job ID</th><th>Employee ID</th><th>Department ID</th><th>Start Date</th><th>End Date</th><th>Hire Date</th><th>All Employee ID</th><th>Ubah Data</th></tr></thead>';
                echo '<tbody>';
                $j = 0;
                while ($row = mysqli_fetch_array($query)) {
                    echo "<tr>";
                    echo "<td>" . ++$j . "</td>";
                    echo "<td>" . $row["job_id"] . "</td>";
                    echo "<td>" . $row["employee_id"] . "</td>";
                    echo "<td>" . $row["department_id"] . "</td>";
                    echo "<td>" . $row["start_date"] . "</td>";
                    echo "<td>" . $row["end_date"] . "</td>";
                    echo "<td>" . $row["hire_date"] . "</td>";
                    echo "<td>" . $row["all_employees_id"] . "</td>";
                    echo "<td><a href='job_history_delete.php?id=" . $row['all_employees_id'] . "' class='btn btn-danger btn-sm'>Hapus</a> ";
                    echo "<a href='job_history_edit.php?id=" . $row['all_employees_id'] . "' class='btn btn-warning btn-sm'>Edit</a></td>";
                    echo "</tr>";
                }
                echo '</tbody>';
                echo "</table>";
            } else {
                echo '<div class="alert alert-warning" role="alert">No employees data found.</div>';
            }
            ?>
        </div>
    </div>
</div>
<img src="logo_unpad.png" alt="UNPAD Logo" class="logo">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
$conn->close();
?>
