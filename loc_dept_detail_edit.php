<?php
include "db_connect.php";

$id = $_GET['id'];
$query = mysqli_query($kon, "SELECT * FROM loc_dept_detail WHERE dept_loc='$id'");
while ($row = mysqli_fetch_array($query)) {
    $department_id = $row['department_id'];
    $location_id = $row['location_id'];
    $postal_code = $row['postal_code'];
    $street_address = $row['street_address'];
    $dept_loc = $row['dept_loc'];
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
                    <form method="post" action="loc_dept_detail_update.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="department_id">Department ID</label>
                            <input type="text" class="form-control" id="department_id" name="department_id" value="<?php echo $department_id; ?>">
                        </div>
                        <div class="form-group">
                            <label for="location_id">Location ID</label>
                            <input type="text" class="form-control" id="location_id" name="location_id" value="<?php echo $location_id; ?>">
                        </div>
                        <div class="form-group">
                            <label for="postal_code">Postal Code</label>
                            <input type="text" class="form-control" id="postal_code" name="postal_code" value="<?php echo $postal_code; ?>">
                        </div>
                        <div class="form-group">
                            <label for="street_address">Street Address</label>
                            <input type="text" class="form-control" id="street_address" name="street_address" value="<?php echo $street_address; ?>">
                        </div>
                        <div class="form-group">
                            <label for="dept_loc">Department Location</label>
                            <input type="text" class="form-control" id="dept_loc" name="dept_loc" value="<?php echo $dept_loc; ?>">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                        <a href="loc_dept_detail_tampilan.php" class="btn btn-secondary ml-2">Back</a>
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
