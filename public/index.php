<?php
echo <<<HTML
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes SOAP</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container py-5">
    <h1 class="mb-4 text-center">Clientes SOAP</h1>

    <!-- Sección de Herramientas -->
    <div class="alert alert-info mb-4" role="alert">
        <h4 class="alert-heading">⚙️ Herramientas</h4>
        <p>Ejecuta estos scripts para generar el WSDL y las clases:</p>
        <div class="btn-group" role="group">
            <a href="generarWsdl.php" target="_blank" class="btn btn-warning">
                <strong>Generar WSDL</strong>
            </a>
            <a href="generarClases.php" target="_blank" class="btn btn-success">
                <strong>Generar Clases</strong>
            </a>
        </div>
    </div>

    <h2 class="mb-3">Clientes Disponibles</h2>
    <div class="row g-4">

        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Cliente (sin WSDL)</h5>
                    <p class="card-text">
                        <a href="cliente.php" class="btn btn-primary">Abrir cliente</a>
                    </p>
                    <p class="card-text text-muted">
                        Este cliente consume el servicio SOAP sin usar WSDL, es decir, se conecta directamente usando la URL del endpoint.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Cliente W (con WSDL)</h5>
                    <p class="card-text">
                        <a href="clienteW.php" class="btn btn-primary">Abrir cliente</a>
                    </p>
                    <p class="card-text text-muted">
                        Este cliente consume el servicio SOAP utilizando el archivo WSDL para obtener la definición del servicio y sus métodos.
                    </p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <h5 class="card-title">Cliente W2 (WSDL + código generado)</h5>
                    <p class="card-text">
                        <a href="clienteW2.php" class="btn btn-primary">Abrir cliente</a>
                    </p>
                    <p class="card-text text-muted">
                        Este cliente usa el WSDL y además utiliza el código generado por <strong>wsdl2phpgenerator</strong> para mapear clases y estructuras automáticamente.
                    </p>
                </div>
            </div>
        </div>

    </div>
</div>

<!-- Bootstrap 5 JS (opcional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
HTML;