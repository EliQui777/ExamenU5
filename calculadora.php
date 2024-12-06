<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $potenciaUtil = filter_var($_POST['potenciaUtil'], FILTER_VALIDATE_FLOAT);
    $rendimiento = filter_var($_POST['rendimiento'], FILTER_VALIDATE_FLOAT);
    $densidadRadiacion = filter_var($_POST['densidadRadiacion'], FILTER_VALIDATE_FLOAT);

    if ($potenciaUtil && $rendimiento && $densidadRadiacion) {
        // Cálculo de la potencia total
        $potenciaReal = $potenciaUtil / $rendimiento;

        // Cálculo del área
        $superficie = $potenciaReal / $densidadRadiacion;

        echo json_encode(["superficie" => round($superficie, 2)]);
    } else {
        echo json_encode(["error" => "Datos inválidos"]);
    }
}
?>
