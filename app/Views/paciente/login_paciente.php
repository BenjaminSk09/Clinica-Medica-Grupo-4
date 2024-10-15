<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Empleados</title>
    <link href="<?= base_url('diseno_css/empleado/login_empleados.css') ?>" rel="stylesheet">
</head>

<body class="container">
    <div class="login-box">
        <?php if (session()->getFlashdata('error')): ?>
        <div class="alert alert-danger">
            <?= esc(session()->getFlashdata('error')) ?>
        </div>
        <?php endif; ?>
        <p>Login</p>
        <form action="<?= base_url('login_empleado/auth') ?>" method="post" onsubmit="fadeOutBody()">
            <div class="user-box">
                <input name="email" type="email" required aria-label="Correo electrónico">
                <label>Email</label>
            </div>
            <div class="user-box">
                <input name="contrasena" type="password" required aria-label="Contraseña">
                <label>Contraseña</label>
            </div>
            <button type="submit" class="btn">Submit</button>
        </form>
        <p>Don't have an account? <a href="" class="a2">Sign up!</a></p>
    </div>
</body>

</html>