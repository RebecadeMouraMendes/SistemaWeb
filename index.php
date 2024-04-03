<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA WEB</title>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
<div class="container text-center">
  <div class="row">
    <div class="col">
        <nav class="navbar navbar-expand-lg navbar bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"> SISTEMA WEB</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="#">Cadastrar</a>
                <a class="nav-link" href="#">Consultar</a>
            </div>
            </div>
        </div>
        </nav>
    </div>
  </div>
</div>
<br>
<div class="container text-start">
  <div class="row">
    <div class="col">
    <p class="fs-4">Cadastrar - Agendamento de Potenciais Clientes</p>
    &nbsp;
    <p class="fs-5">Sistema utilizado para agendamento de serviços.</p>
    <br>
    <p class="fs-5">Nome:</p>
    <div class="input-group mb-3" name="nome">
        <input type="text" class="form-control">
    </div>
    <br>
    <p class="fs-5">Telefone:</p>
    <div class="input-group mb-3" name="telefone">
        <input type="text" class="form-control">
    </div>
    <br>
    <p class="fs-5">Origem:</p>
    <select class="form-select" aria-label="Default select example">
        <option selected>Celular</option>
        <option value="1">Desktop</option>
        <option value="2">WhatsApp</option>
        <option value="3">Email</option>
    </select>
    <br>
    <p class="fs-5">Data do Contato:</p>
   

    <br>
    <p class="fs-5">Observação:</p>
    <div class="mb-3">
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
    
    </div>
  </div>
</div>
</body>
</html>