<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar Libro</title>
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

    <div class="container mt-5 col-md-6">
        <div class="card">
            <div class="card-header fs-5 text-center text-primary">
                Registrar Libro
            </div>
            <div class="card-body">
                <form> 
                    <div class="mb-3">
                        <label for="isbn" class="form-label">ISBN:</label>
                        <input type="text" class="form-control" id="isbn" name="isbn" required>
                    </div>
                    <div class="mb-3">
                        <label for="titulo" class="form-label">Título del Libro:</label> 
                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                    </div>
                    <div class="mb-3">
                        <label for="autor" class="form-label">Autor:</label>
                        <input type="text" class="form-control" id="autor" name="autor" required>
                    </div>
                    <div class="mb-3">
                        <label for="pagina" class="form-label">Páginas:</label>
                        <input type="number" class="form-control" id="pagina" name="pagina" required> 
                    </div>
                    <div class="mb-3">
                        <label for="año" class="form-label">Año:</label>
                        <input type="number" class="form-control" id="año" name="año" required>
                    </div>
                    <div class="mb-3">
                        <label for="editorial" class="form-label">Editorial:</label>
                        <input type="text" class="form-control" id="editorial" name="editorial" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email de Editorial:</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
            </div>
        </div>
    </div>

    <footer class="mt-5">
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