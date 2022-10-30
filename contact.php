<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2 align="center"> <u> All registration Data</u></h2>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_REQUEST['fname'];
    $lname = $_REQUEST['lname'];
    $dob = $_REQUEST['dob'];
    $gender = $_REQUEST['gender'];
    $email = $_REQUEST['email'];
    $mon = $_REQUEST['mon'];
    $kl = $_REQUEST['kl'];

}
//echo "<b><u>All registration Data</u></b><br><br>";
echo "<b>First Name:</b> $fname <br> ";
echo "<b>last Name:</b> $lname <br> ";
echo "<b>Full Name:</b> $fname $lname <br>";
echo "<b>Date of Birth:</b> $dob <br>";
echo "<b>Gender:</b> $gender <br>";
echo "<b>Email:</b> $email <br>";
echo "<b>Mobile Number:</b> $mon <br>";
echo "<b>Known Language:</b> $kl <br>";
?>