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
                    <form action="job_insert.php" method="POST">
                        <div class="form-group">
                            <label for="job_id">Job ID</label>
                            <input type="text" class="form-control" id="job_id" name="job_id" placeholder="Masukkan Job ID">
                        </div>
                        <div class="form-group">
                            <label for="job_title">Job Title</label>
                            <input type="text" class="form-control" id="job_title" name="job_title" placeholder="Masukkan Job Title">
                        </div>
                        <div class="form-group">
                            <label for="min_salary">Minimum Salary</label>
                            <input type="text" class="form-control" id="min_salary" name="min_salary" placeholder="Masukkan Minimum Salary">
                        </div>
                        <div class="form-group">
                            <label for="max_salary">Maximum Salary</label>
                            <input type="text" class="form-control" id="max_salary" name="max_salary" placeholder="Masukkan Maximum Salary">
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
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
