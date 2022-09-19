<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>
    <h1 style="text-align: center; margin-bottom:2.5rem;">Dashboard</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First Name</th>
                <th scope="col">Middle Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Aadhar Number</th>
                <th scope="col">D.O.B.</th>
                <th scope="col">Country</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $servername = "localhost";
                $username = "testuser";
                $password = "pheuture";
                $db_name = "pheuture";
            
                $conn = new mysqli($servername, $username, $password, $db_name);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                $fetch_query = "SELECT * from profile";

                $result = $conn->query($fetch_query);

                if($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<th scope='row'>". $row["id"] . "</th>";
                        echo "<td>". $row['f_name'] ."</td>";
                        echo "<td>". $row['m_name'] ."</td>";
                        echo "<td>". $row['l_name'] ."</td>";
                        echo "<td>". $row['aadhar'] ."</td>";
                        echo "<td>". $row['dob'] ."</td>";
                        echo "<td>". $row['country'] ."</td>";
                        echo "</tr>";
                    }
                }
                else {
                    echo '<tr>
                            <th scope="row">0</th>
                            <td colspan="6" style="text-align: center;">No records found</td>
                        </tr>';
                }
                $conn->close();
            ?>
        </tbody>
    </table>
</body>
</html>