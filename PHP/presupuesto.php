<?php
include_once("clasePresupuesto.php");

$distancia = $_POST["Distancia"]
$consumo = $_POST["Consumo"]
$precio = $_POST["Precio"]
$costoAli = $_POST["CostoAli"]
$costoPeaj = $_POST["CostoPeaj"]

$costoCom = getCostoCom();
$presupuesto = getPresupuesto();

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
                <p><strong>Costo del Combustible:</strong> $ <?php echo $costoCom = getCostoCom(); ?> </p>
                <p><strong>Corriente:</strong> <?php echo $electronica->getCorriente(); ?> Amperios</p>
                <p><strong>Potencia:</strong> <?php echo $electronica->getPotencia(); ?> Vatios</p>
                <a class="btn btn-primary" href="../HTML/presupuesto.html" role="button">Calcular Nuevo</a>
                <a class="btn btn-warning" href="../index.html" role="button" >Home</a>
            </div>
        </div>
    </div>
</body>
</html>