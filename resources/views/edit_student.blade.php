<?php
include "config.php";

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM students WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if(isset($_POST['update']))
{
    $fullname = $_POST['fullname'];
    $matric = $_POST['matric'];
    $department = $_POST['department'];
    $email = $_POST['email'];

    mysqli_query($conn,"UPDATE students SET
    fullname='$fullname',
    matric='$matric',
    department='$department',
    email='$email'
    WHERE id=$id");

    header("Location:view_students.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Student</title>
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<div class="container">

<h2>Edit Student</h2>

<form method="POST">

<input type="text" name="fullname" value="<?php echo $row['fullname']; ?>" required>

<input type="text" name="matric" value="<?php echo $row['matric']; ?>" required>

<input type="text" name="department" value="<?php echo $row['department']; ?>" required>

<input type="email" name="email" value="<?php echo $row['email']; ?>" required>

<button name="update">Update Student</button>

</form>

</div>

</body>
</html>