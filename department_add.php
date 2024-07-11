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
                    <form action="department_insert.php" method="POST">
                        <div class="form-group">
                            <label for="department_id">Department ID</label>
                            <input type="text" class="form-control" id="department_id" name="department_id" placeholder="Masukkan Department ID">
                        </div>
                        <div class="form-group">
                            <label for="department_name">Department Name</label>
                            <input type="text" class="form-control" id="department_name" name="department_name" placeholder="Masukkan Department Name">
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
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
