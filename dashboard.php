<?php
include_once('connect.php');
$conn = getConnection();

$sql = 'SELECT * FROM appointment_form';
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
</head>

<body style="text-align: center;">
    <h1 style="font-family: Georgia, 'Times New Roman', Times, serif;"><u> Appointments </u></h1>
    <br>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Contact</th>
            <th>City</th>
            <th>Date</th>
            <th>OPD</th>
        </tr>
        <?php while ($row =  $result->fetch_assoc()) { ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['p_name'] ?></td>
                <td><?= $row['contact_no'] ?></td>
                <td><?= $row['city'] ?></td>
                <td><?= $row['appointment_date'] ?></td>
                <td><?= $row['opd'] ?></td>
            </tr>
        <?php } ?>
    </table>
</body>

</html>