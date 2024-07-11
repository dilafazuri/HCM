<?php
include "db_connect.php";

$id = $_GET['id'];
$query = mysqli_query($kon, "SELECT * FROM department WHERE department_id='$id'");
while ($row = mysqli_fetch_array($query)) {
    $department_id = $row['department_id'];
    $department_name = $row['department_name'];
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
                    <form method="post" action="department_update.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="department_id">Department ID</label>
                            <input type="text" class="form-control" id="department_id" name="department_id" value="<?php echo $department_id; ?>">
                        </div>
                        <div class="form-group">
                            <label for="department_name">Department Name</label>
                            <input type="text" class="form-control" id="department_name" name="department_name" value="<?php echo $department_name; ?>">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                        <a href="department_tampilan.php" class="btn btn-secondary ml-2">Back</a>
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
