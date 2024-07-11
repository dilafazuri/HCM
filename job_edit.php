<?php
include "db_connect.php";

$id = $_GET['id'];
$query = mysqli_query($kon, "SELECT * FROM jobs WHERE job_id='$id'");
while ($row = mysqli_fetch_array($query)) {
    $job_id = $row['job_id'];
    $job_title = $row['job_title'];
    $min_salary = $row['min_salary'];
    $max_salary = $row['max_salary'];
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
                    <form method="post" action="job_update.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="job_id">Job ID</label>
                            <input type="text" class="form-control" id="job_id" name="job_id" value="<?php echo $job_id; ?>">
                        </div>
                        <div class="form-group">
                            <label for="job_title">Job Title</label>
                            <input type="text" class="form-control" id="job_title" name="job_title" value="<?php echo $job_title; ?>">
                        </div>
                        <div class="form-group">
                            <label for="min_salary">Minimum Salary</label>
                            <input type="text" class="form-control" id="min_salary" name="min_salary" value="<?php echo $min_salary; ?>">
                        </div>
                        <div class="form-group">
                            <label for="max_salary">Maximum Salary</label>
                            <input type="text" class="form-control" id="max_salary" name="max_salary" value="<?php echo $max_salary; ?>">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                        <a href="job_tampilan.php" class="btn btn-secondary ml-2">Back</a>
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
