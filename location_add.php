<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Tambah Data Baru</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-info text-white">
                    <h4 class="mb-0">Masukkan Data Baru</h4>
                </div>
                <div class="card-body">
                    <form action="location_insert.php" method="POST">
                        <div class="form-group">
                            <label for="location_id">Location ID</label>
                            <input type="text" class="form-control" id="location_id" name="location_id" placeholder="Masukkan Location ID">
                        </div>
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" placeholder="Masukkan City">
                        </div>
                        <div class="form-group">
                            <label for="region">Region</label>
                            <input type="text" class="form-control" id="region" name="region" placeholder="Masukkan Region">
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" class="form-control" id="country" name="country" placeholder="Masukkan Country">
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
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
