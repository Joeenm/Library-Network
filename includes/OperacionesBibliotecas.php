<?php
require_once __DIR__ . '/../classes/RedBibliotecas.php';

function procesarOperacion($data) {
    $red = new RedBibliotecas();
    $operacion = $data['operacion'] ?? null;
    $biblioteca = $data['biblioteca'] ?? null;
    $anio = $data['anio'] ?? null;

    switch ($operacion) {
        case 'consultar_biblioteca':
            $bib = $red->getBibliotecaPorNombre($biblioteca);
            if ($bib) {
                echo "<div class='result'><h2>Total de consultas en la biblioteca {$biblioteca}</h2>";
                echo "<p>{$bib->getTotalConsultas()} consultas.</p></div>";
            } else {
                echo "<div class='result'><p>La biblioteca '{$biblioteca}' no se encontró.</p></div>";
            }
            break;

        case 'consultar_anio':
            $totalAnio = $red->getTotalConsultasPorAnio($anio);
            echo "<div class='result'><h2>Total de consultas en todas las bibliotecas en el año {$anio}</h2>";
            echo "<p>{$totalAnio} consultas.</p></div>";
            break;

        case 'promedio':
            $promedio = $red->getPromedioConsultas();
            echo "<div class='result'><h2>Promedio de consultas de toda la red</h2>";
            echo "<p>{$promedio} consultas.</p></div>";
            break;

        case 'mostrar_matriz':
            echo "<div class='result'><h2>Matriz de Consultas por Biblioteca</h2>";
            $red->mostrarMatriz();
            echo "</div>";
            break;

        case 'salir':
            echo "<div class='result'><p>Gracias por usar el sistema.</p></div>";
            break;

        default:
            echo "<div class='result'><p>Operación no válida.</p></div>";
            break;
    }
}
?>