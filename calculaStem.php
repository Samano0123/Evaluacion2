<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $ancho = 80; 
    $largo = 40; 
    $tiempo_horas = 12; 
    $coefRadiacion = 0.9;
    $rendimiento = 0.2; 
    $conversion_cal_kcal = 1000; // 1 kcal = 1000 cal
    $conversion_kcal_kWh = 860; // 1 kWh = 860 kcal


    $area = $ancho * $largo; // cm²
    $tiempo_min = $tiempo_horas * 60; // min
    $energia_cal = $coefRadiacion * $tiempo_min * $area * $rendimiento;  // calorias
    $energia_kcal = $energia_cal / $conversion_cal_kcal; //  kilocalorías
    $energia_kWh = $energia_kcal / $conversion_kcal_kWh; //  kilovatios-hora


    $resultado = "
        <p>1. Área de la placa: {$area} cm²</p>
        <p>2. Tiempo de operación: {$tiempo_horas} horas ({$tiempo_min} minutos)</p>
        <p>3. Energía generada en calorías: " . number_format($energia_cal, 2) . " cal</p>
        <p>4. Energía generada en kilocalorías: " . number_format($energia_kcal, 2) . " kcal</p>
        <p>5. Energía generada en kilovatios-hora: " . number_format($energia_kWh, 4) . " kWh</p>
    ";


    echo $resultado;
    exit;
}
?>
