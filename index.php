<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Grupo 7</title>
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    <!DOCTYPE html>
    <html>

    <head>
        <title>Slide Navbar</title>
        <link rel="stylesheet" type="text/css" href="slide navbar style.css">
        <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    </head>

    <body>
        <div class="main">
            <input type="checkbox" id="chk" aria-hidden="true">

            <div class="login">
                <form action="validar.php" method="post">
                    <label for="chk" aria-hidden="true">Login</label>
                    <input type="user" name="user" placeholder="Usuario" required="">
                    <input type="password" name="pswd" placeholder="Contraseña" required="">
                    <button>Login</button>
                </form>
            </div>

            <div class="signup">
                <form>
                    <label for="chk" aria-hidden="true">Sign up</label>
                    <input type="text" name="txt" placeholder="Nombre de usuario" required="">
                    <input type="email" name="email" placeholder="Email" required="">
                    <input type="password" name="pswd" placeholder="Contraseña" required="">
                    <button>Sign up</button>
                </form>
            </div>

        </div>
    </body>

    </html>
    <!-- partial -->

</body>

</html>