<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <h1>Azure</h1>
    <div class="card">
        <div class="card-header bg-primary">
        <center>
          <h2 style="color:white;">Crear sector</h2>
        </center>
        </div>
        <div class="card-body">
            <form action={{route("store_gestion_sectores")}} method="POST"  class="needs-validation" novalidate>
                @csrf
                <label for="nombre">Nombre sector</label>
                <input class="form-control" type="text" name="nombre_sector" id="nombre" required>
                <div class="valid-feedback">
                    <strong>Nombre correcto.</strong>    
                </div>
                <div class="invalid-feedback">
                    <strong>Por favor, escriba un nombre.</strong>   
                </div>
                <br>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary" id="boton">Enviar</button>
                </div>
                      
            </form>  
        </div>
      </div>
      <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
          'use strict';
          window.addEventListener('load', function() {
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.getElementsByClassName('needs-validation');
            // Loop over them and prevent submission
            var validation = Array.prototype.filter.call(forms, function(form) {
              form.addEventListener('submit', function(event) {
                if (form.checkValidity() === false) {
                  event.preventDefault();
                  event.stopPropagation();
                }
                form.classList.add('was-validated');
              }, false);
            });
          }, false);
        })();
        </script>
</body>
</html>