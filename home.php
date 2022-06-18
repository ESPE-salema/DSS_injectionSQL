<?php include('config/db.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>REPORTES</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet" /> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet" /> <!-- https://getbootstrap.com/ -->
    <link href="fontawesome/css/all.min.css" rel="stylesheet" /> <!-- https://fontawesome.com/ -->
    <link href="css/templatemo-diagoona.css" rel="stylesheet" />
    <!--

TemplateMo 550 Diagoona

https://templatemo.com/tm-550-diagoona

-->
</head>

<body>
    <div class="tm-container">
        <div>
            <div class="tm-row pt-4">
                <div class="tm-col-left">
                    <div class="tm-site-header media">
                        <i class="fas fa-database fa-3x mt-1 tm-logo"></i>
                        <div class="media-body">
                            <h1 class="tm-sitename text-uppercase">Grupo 7</h1>
                            <p class="tm-slogon">Desarrollo de Software Seguro</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="tm-row">
                <div class="tm-col-left"></div>
                <main class="tm-col-right">
                    <section class="tm-content">
                        <h2 class="mb-2 tm-content-title">REPORTES</h2>
                        <p class="mb-2">Elije la tabla que deseas ver:</p>

                        <form action="home.php" method="post">
                            <select class="selectpicker show-tick mb-2" name="table" id="table">
                                <option value="bar">Bar</option>
                                <option value="buzon">Buzón</option>
                                <option value="campus">Campus</option>
                                <option value="menu">Menu</option>
                                <option value="preferencias">Preferencias</option>
                                <option value="snack">Snack</option>
                            </select>
                            <div class="tm-row-left mb-2">
                                <button type="submit" class="btn btn-dark">Ver</button>
                            </div>
                        </form>

                        <?php
                        if (!$mysqli) {
                            die("Error en la conexión");
                        }

                        if (isset($_POST['table'])) {
                            $table = $_POST['table'];
                        } else {
                            $table = "bar";
                        }
                        print("<h3 class='mb-2 tm-content-title'>Estas viendo la tabla $table</h3>");

                        $sql = "select * from " . $table;

                        $respuesta = pg_query($conexion, $sql);
                        $result = array();

                        while ($estudiantes = pg_fetch_assoc($respuesta)) {
                            array_push($result, $estudiantes);
                        }

                        ?>
                        <?php if (count($result) > 0) : ?>
                            <table class="table table-striped table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col"><?php echo implode('</th><th>', array_keys(current($result))); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($result as $row) : array_map('htmlentities', $row); ?>
                                        <tr>
                                            <td><?php echo implode('</td><td>', $row); ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        <?php endif; ?>
                    </section>
                </main>
            </div>
        </div>

        <div class="tm-row">
            <div class="tm-col-left text-center">
            </div>
            <div class="tm-col-right tm-col-footer">
                <footer class="tm-site-footer text-right">
                    <p class="mb-0">Universidad de las Fuerzas Armadas ESPE</p>
                </footer>
            </div>
        </div>

        <!-- Diseño de fondo diagonal -->
        <div class="tm-bg">
            <div class="tm-bg-left"></div>
            <div class="tm-bg-right"></div>
        </div>
    </div>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.backstretch.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>

</html>