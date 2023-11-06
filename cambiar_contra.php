<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='Resources/styles.css'>
</head>

<body>
    <style>
        body,
        html {
            margin: 0;
            padding: 0;
        }
    </style>
    <div id="wrapper">
        <aside id="sidebar-wrapper">
            <div class="sidebar-brand">
                <h2>TRACE</h2>
            </div>
            <ul class="sidebar-nav">
                <li>
                    <a href="index.html"><i class="fa fa-home"></i>Inicio</a>
                </li>
                <li>
                    <a href="tablas.html"><i class="fa fa-linkedin"></i>Tablas</a>
                </li>
                <li>
                    <a href="howitworks.html"><i class="fa fa-book"></i>Como funciona</a>
                </li>
                <li>
                    <a href="aboutus.html"><i class="fa fa-institution"></i>Acerca de nosotros</a>
                </li>
                <li>
                    <a href="faq.html"><i class="fa fa-question"></i>FAQ</a>
                </li>
                <li class="active">
                    <a href="login.html"><i class="fa fa-upload"></i>Actualiza tus datos</a>
                </li>
                <li>
                    <a href="admin.html"><i class="fa fa-upload"></i>Admin</a>
                </li>
            </ul>
        </aside>

        <div id="navbar-wrapper">
            <nav class="navbar navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <a href="#" class="navbar-brand" id="sidebar-toggle"><i class="fa fa-bars"></i></a>
                    </div>
                </div>
            </nav>
        </div>
        <section id="content-wrapper">
            <div class="container">
                <div class="glassmorphism-form">
                  <h2>Cambiar Contraseña</h2>
                  <form id="update-form" action="Resources/contra_process.php" method="post">
                    <h1>Alumno: <?php echo isset($_GET['matricula']) ? $_GET['matricula'] : 'No disponible'; ?></h1>
                    <h3>Nueva Constraseña</h3>
                    <input type="hidden" name="matricula" value="<?php echo isset($_GET['matricula']) ? $_GET['matricula'] : ''; ?>">
                    <input type="hidden" name="correo" value="<?php echo isset($_GET['correo']) ? $_GET['correo'] : ''; ?>">
                    <input type="password" name="password" placeholder="Nueva Contraseña" required>
                    <h3>Confirmar Contraseña</h3>
                    <input type="password" name="confirm_password" placeholder="Confirmar Contraseña" required>
                    <button type="submit">Continuar</button>
                  </form>
                </div>
              </div>
        </section>

    </div>
    <script src="Resources/scripts.js"></script>
</body>

</html>