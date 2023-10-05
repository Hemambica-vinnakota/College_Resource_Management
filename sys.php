<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body style="margin : 50px;">
    <h1>Systems</h1>
    <br>
    <table class="table">
        <thead>
            <th>Room Number</th>
            <th>Room Type</th>
            <th>Computers</th>
            <th>Chairs</th>
            <th>Projectors</th>
        </thead>
        <tbody>
            <?php
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database = "infradb";

            $connection = new mysqli($servername, $username, $password, $database);
            if($connection->connect_error){
                die("connection failed: ". $connection->connect_error);

            }
            $sql = "SELECT * FROM system";
            $result = $connection->query($sql);

            if(!$result){
                die("Invalid query: ". $connection->error);
            }

            while($row = $result->fetch_assoc()){
                echo "<tr>
                      <td>" . $row["Room No."] ."</td>
                      <td>" . $row["Room Type"] ."</td>
                      <td>" . $row["Computers"] ."</td>
                      <td>" . $row["Chairs"] ."</td>
                      <td>" . $row["Projectors"] ."</td>
                      </tr>";
            }


            ?>

        </tbody>
    </table>
</body>
</html>
