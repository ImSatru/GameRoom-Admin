<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <title>Ingreso</title>
</head>

<body>
    <div class="container">
        <form action="index.php" method="POST">
            <div class="logo">
                <img src="pics/logo.png" alt="">
            </div>
            <div class="title">
                <h1>Sala de juegos</h1>
            </div>
            <div class="input-text">
                <input type="text" name="user" placeholder="Usuario" required>
            </div>
            <div class="input-text">
                <input type="password" name="password" placeholder="Contraseña" required>
            </div>
            <div class="submit">
                <button type="submit" name="submit">Ingresar</button>
            </div>
        </form>
    </div>
</body>

</html>


<?php
/*
if (isset($_POST['submit'])) {
    require_once __DIR__ . '/../config/conex.php';

    $user = $_POST['user'];
    $pass = $_POST['password'];

    if (!empty($user) && !empty($pass)) {
        $sql = "SELECT * FROM admin WHERE username = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $user);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            if ($pass === $row['password']) {
                header('Location: console.php');
                exit();
            } else {
                echo "Usuario o contraseña incorrectos";
            }
        } else {
            echo "Usuario o contraseña incorrectos";
        }

        $stmt->close();
    } else {
        echo "Por favor, complete todos los campos.";
    }
}
*/
?>