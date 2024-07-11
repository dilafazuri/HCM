<?php
include "db_connect.php";

$id = $_GET['id'];
$query = mysqli_query($kon, "SELECT * FROM job_history WHERE all_employees_id='$id'");
while ($row = mysqli_fetch_array($query)) {
    $job_id = $row['job_id'];
    $employee_id = $row['employee_id'];
    $department_id = $row['department_id'];
    $start_date = $row['start_date'];
    $end_date = $row['end_date'];
    $hire_date= $row['hire_date'];
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
                    <form method="post" action="job_history_update.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="job_id">Job ID</label>
                            <input type="text" class="form-control" id="job_id" name="job_id" value="<?php echo $job_id; ?>">
                        </div>
                        <div class="form-group">
                            <label for="employee_id">Employee ID</label>
                            <input type="text" class="form-control" id="employee_id" name="employee_id" value="<?php echo $employee_id; ?>">
                        </div>
                        <div class="form-group">
                            <label for="department_id">Department ID</label>
                            <input type="text" class="form-control" id="department_id" name="department_id" value="<?php echo $department_id; ?>">
                        </div>
                        <div class="form-group">
                            <label for="start_date">Start Date</label>
                            <input type="text" class="form-control" id="start_date" name="start_date" value="<?php echo $start_date; ?>">
                        </div>
                        <div class="form-group">
                            <label for="end_data">End Data</label>
                            <input type="text" class="form-control" id="end_data" name="end_data" value="<?php echo $end_date; ?>">
                        </div>
                        <div class="form-group">
                            <label for="hire_date">Hire Date</label>
                            <input type="text" class="form-control" id="hire_date" name="hire_date" value="<?php echo $hire_date; ?>">
                        </div>
                        <div class="form-group">
                            <label for="all_employees_id">All Employee ID</label>
                            <input type="text" class="form-control" id="all_employees_id" name="all_employees_id" value="<?php echo $all_employees_id; ?>">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                        <a href="job_history_tampilan.php" class="btn btn-secondary ml-2">Back</a>
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
