<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Principal</title> 
    @vite(['resources/js/app.js'])
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body, html {
            height: 100%;
        }
        .full-height {
            height: 100vh;
        }
        footer {
            text-align: center;
            padding: 10px;
            position: relative;
            bottom: 0;
            width: 100%;
            background-color: #c3c4c5; 
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="{{route('rutaprincipal')}}">Principal</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{route('rutaregistro')}}">Registrar Libro</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <div class="d-flex flex-column justify-content-center align-items-center txt-center full-height">
        <h1 class="display-1">Bienvenido Lector!</h1>
        <div class="mt-4 p-3 border border-secondary rounded" style="width: 80%;">
            <h2 class="h4">Noticia Literaria</h2>
            <p>El Día de las Bibliotecas se celebra cada 24 de octubre desde el año 1997. Este día nació como iniciativa de la Asociación Española de Amigos del Libro Infantil y Juvenil con el objetivo de concienciar a la sociedad de la importancia de la lectura y como homenaje y reconocimiento a la labor de los bibliotecarios/as.</p>
            <p>«El lema de este año, «Por un futuro sostenible», pretende destacar el papel fundamental que desempeñan todas las tipologías de bibliotecas (públicas, escolares, universitarias, especializadas y nacionales/regionales) en la consecución de los Objetivos de Desarrollo Sostenible de la Agenda 2030.</p>
            <p>A través de sus colecciones, servicios y actividades con usuarios, las bibliotecas contribuyen a construir una sociedad cada vez mejor informada, más igualitaria, solidaria y justa, plenamente consciente de la necesidad de llevar un modo de vida sostenible como compromiso con las generaciones futuras.»</p>
        </div>
    </div>

    <footer>
        <p id="footer-text"></p>
    </footer>

    <script>
        const today = new Date();
        const options = { year: 'numeric', month: 'long', day: 'numeric' };
        const formattedDate = today.toLocaleDateString('es-ES', options);
        const footerText = `Biblioteca Arcoiris | © ${formattedDate}`;
        document.getElementById('footer-text').innerText = footerText;
    </script>
</body>
</html>