<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>About Us</title>
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
            background-color: #B0E0E6;
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

        .main-content .content-container {
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

        .heading {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 200px; /* Adjust height as needed */
            width: 100%;
            background: url('web_background.jpeg') no-repeat center center;
            background-size: cover;
            text-align: center;
        }

        .heading h1 {
            color: black;
            font-size: 3rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            margin: 0;
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
        <div class="heading">
            <h1>About Us</h1>
        </div>
        <div class="content-container">
            <h4>Welcome to our Human Resource Management System.</h4> 
            <p>This project is created to fulfill the requirements of the <strong>final exam for the Database course</strong>.</p>
            <p>At the core of our mission is the commitment to provide a comprehensive and efficient solution for managing employee data, job histories, and department details. Our system is meticulously designed to empower HR professionals with the tools they need to streamline processes and make data-driven decisions that enhance organizational performance.</p>
            <p>We are dedicated to the ongoing evolution and enhancement of our platform to ensure it consistently meets the evolving needs of our users. Join us in our journey to redefine the future of Human Resource Management.</p>
            <h3>Our Team</h3>
            <ul>
                <li><strong>Laila Budianti:</strong> 14072023009</li>
                <li><strong>Dila Azuri Fitriani:</strong> 140729230010</li>
            </ul>
            <h3>Dosen Pengampu</h3>
            <ul>
                <li><strong>Dr Bertho Tantular, M.Si</strong></li>
            </ul>
        </div>
    </div>
</div>
<img src="logo_unpad.png" alt="UNPAD Logo" class="logo">
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
