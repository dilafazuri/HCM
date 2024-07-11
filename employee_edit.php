<?php
include "db_connect.php";

$id = $_GET['id'];
$query = mysqli_query($kon, "SELECT * FROM employees WHERE all_employees_id='$id'");
while ($row = mysqli_fetch_array($query)) {
    $employee_id = $row['employee_id'];
    $first_name = $row['first_name'];
    $last_name = $row['last_name'];
    $salary = $row['salary'];
    $email = $row['email'];
    $phone_number = $row['phone_number'];
    $job_id = $row['job_id'];
    $department_id = $row['department_id'];
    $all_employees_id = $row['all_employees_id'];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Perbaiki Data</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0">Perbaiki Data</h4>
                </div>
                <div class="card-body">
                    <form method="post" action="employee_update.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="employee_id">Employee ID</label>
                            <input type="text" class="form-control" id="employee_id" name="employee_id" value="<?php echo $employee_id; ?>">
                        </div>
                        <div class="form-group">
                            <label for="first_name">First Name</label>
                            <input type="text" class="form-control" id="first_name" name="first_name" value="<?php echo $first_name; ?>">
                        </div>
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo $last_name; ?>">
                        </div>
                        <div class="form-group">
                            <label for="salary">Salary</label>
                            <input type="text" class="form-control" id="salary" name="salary" value="<?php echo $salary; ?>">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" value="<?php echo $email; ?>">
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Phone Number</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?php echo $phone_number; ?>">
                        </div>
                        <div class="form-group">
                            <label for="job_id">Job ID</label>
                            <input type="text" class="form-control" id="job_id" name="job_id" value="<?php echo $job_id; ?>">
                        </div>
                        <div class="form-group">
                            <label for="department_id">Department ID</label>
                            <input type="text" class="form-control" id="department_id" name="department_id" value="<?php echo $department_id; ?>">
                        </div>
                        <div class="form-group">
                            <label for="all_employees_id">All Employee ID</label>
                            <input type="text" class="form-control" id="all_employees_id" name="all_employees_id" value="<?php echo $all_employees_id; ?>">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                        <a href="employee_tampilan.php" class="btn btn-secondary ml-2">Back</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

<?php
}
?>
