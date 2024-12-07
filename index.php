<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Lista e Përdoruesve</h2>
    <a href="create.php">Shto Përdorues të Rinj</a>

    <table border='1'>
        <tr>
            <th>ID</th>
            <th>Emri</th>
            <th>Email</th>
            <th>Mosha</th>
            <th>Vperimet</th>
        </tr>

        <?php
            include 'db.php';

            $sql = "SELECT * FROM user";
            $result = $conn->query($sql);

    
        
            if($result->num_rows > 0){
                while($row = $result->fetch_assoc()){
                    echo "<tr>
                            <td>" . $row['ID'] . "</td>
                            <td>" . $row['Name'] . "</td>
                            <td>" . $row['email'] . "</td>
                            <td>" . $row['age'] . "</td>
                            <td>
                                <a href='edit.php?id=" . $row['ID'] . "'>Editor</a> 
                                <a href='delete.php?id=" . $row['ID'] . "'>Fshi</a>
                            </td>
                        </tr>";
                }
            } else {
                echo "No records found.";
            }
        
            $conn->close();
        ?>

    </table>
</body>
</html>