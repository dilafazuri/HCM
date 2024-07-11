<?php
include "db_connect.php";

$id = mysqli_real_escape_string($kon, $_GET['id']);
$query = "DELETE FROM loc_dept_detail WHERE dept_loc = '$id'";

if (mysqli_query($kon, $query)) {
    echo "<script language='JavaScript'>
    document.location='loc_dept_detail_tampilan.php';
    </script>";
} else {
    echo "Error: " . mysqli_error($kon);
}

mysqli_close($kon);
?>