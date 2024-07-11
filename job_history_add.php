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
                    <form action="job_history_insert.php" method="POST">
                        <div class="form-group">
                            <label for="job_id">Job ID</label>
                            <input type="text" class="form-control" id="job_id" name="job_id" placeholder="Masukkan Job ID">
                        </div>
                        <div class="form-group">
                            <label for="employee_id">Employee ID</label>
                            <input type="text" class="form-control" id="employee_id" name="employee_id" placeholder="Masukkan Employee ID">
                        </div>
                        <div class="form-group">
                            <label for="department_id">Department ID</label>
                            <input type="text" class="form-control" id="department_id" name="department_id" placeholder="Masukkan Department">
                        </div>
                        <div class="form-group">
                            <label for="start_date">Start Date</label>
                            <input type="text" class="form-control" id="start_date" name="start_date" placeholder="Masukkan Star Date">
                        </div>
                        <div class="form-group">
                            <label for="end_date">End Date</label>
                            <input type="text" class="form-control" id="end_date" name="end_date" placeholder="Masukkan End Date">
                        </div>
                        <div class="form-group">
                            <label for="hire_date">Hire Date</label>
                            <input type="text" class="form-control" id="hire_date" name="hire_date" placeholder="Masukkan Hire Date">
                        </div>
                        <div class="form-group">
                            <label for="all_employees_id">All Employee ID</label>
                            <input type="text" class="form-control" id="all_employees_id" name="all_employees_id" placeholder="Masukkan All Employee ID">
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
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
