<?php
// Verificar si se enviaron los datos de inicio de sesión
if(isset($_POST['username']) && isset($_POST['password'])) {
    // Comprobar los datos de inicio de sesión
    $username = $_POST['username'];
    $password = $_POST['password'];

  

    // Ejemplo de verificación básica (usuario: admin, contraseña: password)
    if($username == 'alex' && $password == '1234') {
        // Inicio de sesión exitoso, redirigir al usuario a la página protegida
        header('Location: index.html');
        exit();
    } else {
        // Inicio de sesión fallido, redirigir al usuario de nuevo a la página de inicio de sesión
        header('Location: login.html');
        exit();
    }
} else {
    // Si no se enviaron los datos de inicio de sesión, redirigir al usuario de nuevo a la página de inicio de sesión
    header('Location: index.html');
    exit();
}
?>
