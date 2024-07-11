<?php
include "db_connect.php";

$employee_id = $_POST['employee_id'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$salary = $_POST['salary'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$job_id = $_POST['job_id'];
$department_id = $_POST['department_id'];
$all_employees_id = $_POST['all_employees_id'];

$query = mysqli_query($kon, "INSERT INTO employees SET
employee_id='$employee_id',first_name ='$first_name', last_name ='$last_name', salary ='$salary',email ='$email',phone_number ='$phone_number',job_id ='$job_id',department_id ='$department_id',all_employees_id ='$all_employees_id'") or die (mysqli_error());
if($query) {
?>
<script language="JavaScript">
document.location='employee_tampilan.php'</script>
<?php
}
?>
