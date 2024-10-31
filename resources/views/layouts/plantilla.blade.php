<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @vite(['resources/js/app.js'])
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body, html {
            height: 100%;
        }
        footer {
            text-align: center;
            padding: 10px;
            position: relative;
            bottom: 0;
            width: 100%;
            background-color: #9ac9f8; 
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #9ac9f8">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{ route('rutaprincipal') }}">{{__('Menú Principal')}}</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('rutaregistro') }}">{{__('Registrar Libro')}}</a>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <div class="container mt-5">
        @yield('content')
    </div>

    <footer>
        <p id="footer-text"></p>
    </footer>

    <script>
        const today = new Date();
        const options = { year: 'numeric', month: 'long', day: 'numeric' };
        const formattedDate = today.toLocaleDateString('en-EN', options);
        const footerText = `Biblioteca Arcoiris | © ${formattedDate}`;
        document.getElementById('footer-text').innerText = footerText;
    </script>
</body>
</html>