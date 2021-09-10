<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="https://getbootstrap.com/docs/5.1/assets/brand/bootstrap-logo.svg" alt="" width="30" height="24">
            </a>
        </div>
    </nav>
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-sn-6">
                <form id="form-usuario" enctype="multipart/form-data">
                    <input type="hidden" class="form-control"  name="escondido" id="escondido" required>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control"  name="nombre" id="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input type="text" class="form-control" name="apellido" id="apellido" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Telefono</label>
                        <input type="number" class="form-control" name="telefono" id="telefono">
                    </div>
                    <div class="mb-3">
                        <label for="fechanacimiento" class="form-label">Fecha Nacimiento</label>
                        <input type="date" class="form-control" name="fechanacimiento" id="fechanacimiento">
                    </div>
                    <div class="mb-3">
                        <label for="horaingreso" class="form-label">Hora Ingreso</label>
                        <input type="time" class="form-control" name="horaingreso" id="horaingreso">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="pais" class="form-label">Pais</label>
                        <select name="pais" id="pais" class="form-control">
                            <option value="peru">Peru</option>
                            <option value="chile">Chile</option>
                            <option value="argentina">Argentina</option>
                            <option value="bolivia">Bolivia</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripcion</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" id="descripcion" rows="3"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="imagen" class="form-label">Imagen</label>
                        <input class="form-control" type="file" name="imagen">
                    </div>
                    <button type="submit" class="btn btn-primary" id="enviar">Registrar</button>
                </form>
            </div>
        </div>
       
    </div>
        
    <script src="js/form.js"></script>
</body>
</html>