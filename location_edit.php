<?php
include "db_connect.php";

$id = $_GET['id'];
$query = mysqli_query($kon, "SELECT * FROM locations WHERE location_id='$id'");
while ($row = mysqli_fetch_array($query)) {
    $location_id = $row['location_id'];
    $city = $row['city'];
    $region = $row['region'];
    $country = $row['country'];
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
                    <form method="post" action="location_update.php?id=<?php echo $id; ?>" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="location_id">Location ID</label>
                            <input type="text" class="form-control" id="location_id" name="location_id" value="<?php echo $location_id; ?>">
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" value="<?php echo $city; ?>">
                        </div>
                        <div class="form-group">
                            <label for="region">Region</label>
                            <input type="text" class="form-control" id="region" name="region" value="<?php echo $region; ?>">
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" class="form-control" id="country" name="country" value="<?php echo $country; ?>">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
                        <a href="location_tampilan.php" class="btn btn-secondary ml-2">Back</a>
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
