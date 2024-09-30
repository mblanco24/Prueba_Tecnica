<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>


    <title>Registro</title>
</head>

<body style= "background-color:rgba(211, 183, 255, 0.795)">
    <main style="display: flex;justify-content: center;align-items: center;min-height: 100svh;font-size: larger;">
        <div style="align-items: center" class="form-container" >
            <h1 style="text-align: center;">Crear cuenta</h1>
            <p style="text-align: center;">Crea tu cuenta para entrar </p>
            <form id="login-form" style="display: flex; flex-direction: column;gap: 10px;">
                <div style="text-align: center;" class="mb-3">
                    <label for="user"  class="form-label">User</label>
                    <input type="text" class="form-control" name="user" id="user" placeholder="Nombre de usuario">
                </div>
                <div style="text-align: center;" class="mb-3">
                    <label for="user"  class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Correo">
                </div>
                <div style="text-align: center;" class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña">
                </div>
                <p style="display: none; color: rgb(255, 81, 81);">Error al registrarse</p>
            </form>
            <div style="display: flex;justify-content: center;align-items: center;">
                <button  type="submit" class="btn btn-primary">Crear Cuenta</button>
            </div>

            <p style="text-align: center;">¿Ya estás registrado? - <a href="/">Login</a></p>
        </div>
    </main>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <script src="{{ asset('js/axios.js') }}"></script>
</body>

</html>
