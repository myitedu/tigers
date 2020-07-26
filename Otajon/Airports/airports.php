<?php
error_reporting(0);
$conn = mysqli_connect('localhost','root','','myitedu');

if (!$conn){
    //do not forget to log the issue and notify the on-call person
    exit("Sorry, your database connection is not established");
}
$sql = "SELECT * FROM airports WHERE country='Ukraine'";
$results = $conn->query($sql);


if($results->num_rows==0){
    exit("No record is found by that query");
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/bootstrap.css">
</head>
<body>
<div class="container-fluid">
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>City</th>
            <th>Country</th>
            <th>Code</th>
        </tr>

        <?php
        while($row=$results->fetch_assoc()){
            ?>
            <tr>
                <td><?php echo $row['id'];?></td>
                <td><?php echo $row['city'];?></td>
                <td><?php echo $row['country'];?></td>
                <td><?php echo $row['code'];?></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>
</body>
</html>
