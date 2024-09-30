<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!--<link rel="stylesheet" href="{{ asset('css/app.css') }}"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="{{ asset('js/axios.js') }}"></script>


    <title>Admin</title>
</head>

<body style="background-color:rgba(211, 183, 255, 0.795)">
    <main style="display: flex;justify-content: center;align-items: center;min-height: 100svh;font-size: larger;">
        <div style="align-items: center" class="form-container">
            <h1>Bienvenido al área de administración</h1>

            <h1>Usuarios 👇</h1><br />
            <h2>List</h2>

            <div className='grid'>

            </div>
            </>
            <div style="display: flex;justify-content: center;align-items: center;">
                <button type="submit" class="btn btn-primary">Cerrar sesión</button>
            </div>
        </div>
    </main>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>

    <script src="{{ asset('resources/js/axios.js') }}"></script>
    -->



</body>

</html>
