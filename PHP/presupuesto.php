<?php
include_once("ClasePresupuesto.php");

$distancia = $_POST["Distancia"];
$consumo = $_POST["Consumo"];
$precio = $_POST["Precio"];
$costoAli = $_POST["CostoAli"];
$costoPeaj = $_POST["CostoPeaj"];

$presupuestoViaje = new Presupuesto($distancia, $consumo, $precio, $costoAli, $costoPeaj);

$presupuestoViaje->calcularPresu();

$costoCom = $presupuestoViaje->getCostoCom();
$presupuesto = $presupuestoViaje->getPresupuesto();
?>


<!DOCTYPE html>
<html lang="es">
<head>
    <title>Cálculo de Presupuesto</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Cálculo de Presupuesto para viaje</h1>
        <div class="card mt-3">
            <div class="card-header">Resultados</div>
            <div class="card-body">
                <p><strong>Distancia a recorrer:</strong> $ <?php echo $distancia; ?> km </p>
                <p><strong>Consumo Vehiculo:</strong><?php echo $consumo; ?> km/l</p>
                <p><strong>Precio Gasolina:</strong> $ <?php echo $precio; ?> </p>
                <p><strong>Costo del Combustible:</strong> $ <?php echo $costoCom; ?> </p>
                <p><strong>Costo Alimentacion:</strong> $ <?php echo $costoAli; ?> </p>
                <p><strong>Costo de Peajes:</strong> $ <?php echo $costoPeaj; ?> </p>
                <p><strong>Presupuesto Total:</strong> $ <?php echo $presupuesto; ?> </p>
                <a class="btn btn-primary" href="../HTML/presupuesto.html" role="button">Calcular Nuevo
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2z"/>
                        <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466"/>
                    </svg>
                </a>
                <a class="btn btn-warning" href="../index.html" role="button" >Home
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                        <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</body>
</html>