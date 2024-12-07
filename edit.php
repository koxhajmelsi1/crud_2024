<?php
    include 'db.php';

    $id = $_GET['id'];
    $sql = "SELECT * FROM user WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITO PERDORUESIN</title>
</head>
<body>
    
    <h2>Edito Perdoruesin</h2>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $row['ID'] ?>">
        <label for="name">Emri:</label>
        <input type="text" id="name" name="name" value="<?php echo $row['Name']; ?> "required><br><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="<?php echo $row['email']; ?> "required><br><br>

        <label for="age">Mosha: </label>
        <input type="number" id="age" name="age" value="<?php echo $row['age']; ?> "required><br><br>

        <input type="submit" value="Përditëso">
    </form>
    <a href="index.php">Ktheu te Lista</a>
</body>
</html>
