<?php
    require_once("./database/db_connection.php");
    if(!$conn->connect_error) {
        $query = "SELECT * from file_uploads";

        $records = $conn->query($query);

        if($records->num_rows === 0) {
            echo "<tr>";
            echo '<th scope="row"></th>';
            echo "<td>Empty</td>";
            echo "<td>Empty</td>";
            echo "<td>Empty</td>";
            echo "</tr>";
        }
        else {
            while($row = $records->fetch_assoc()) {
                echo "<tr>";
                echo "<th scope='row'>". $row["id"] . "</th>";
                echo "<td>". $row['email'] ."</td>";
                echo "<td>". $row['original_file_name'] ."</td>";
                echo "<td>". $row['uploaded_file_name'] ."</td>";
                echo "</tr>";
            }
        }
    }
    else {
        echo "<tr>";
        echo '<th scope="row"></th>';
        echo '<td style="text-align: center;" colspan="4">Connection Error with database</td>';
        echo "</tr>";
    }
    $conn->close();
?>