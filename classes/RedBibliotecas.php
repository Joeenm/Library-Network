<?php
require_once __DIR__ . '/../classes/Biblioteca.php';

class RedBibliotecas {
    private $bibliotecas = [];

    public function __construct() {
        $this->bibliotecas = [
            new Biblioteca('A', 3500, [2021 => 1200, 2022 => 1500, 2023 => 1800]), // Biblioteca A con cifras incrementadas
            new Biblioteca('B', 4500, [2021 => 800, 2022 => 1000, 2023 => 1100]), // Biblioteca B con un crecimiento constante
            new Biblioteca('C', 5000, [2021 => 1300, 2022 => 1600, 2023 => 1400]), // Biblioteca C con cifras realistas
            new Biblioteca('D', 4200, [2021 => 500, 2022 => 600, 2023 => 700]),   // Biblioteca D con una tendencia de crecimiento más moderada
            new Biblioteca('E', 3800, [2021 => 950, 2022 => 1000, 2023 => 1200])   // Biblioteca E con un crecimiento moderado
        ];
    }

    public function getBibliotecaPorNombre($nombre) {
        foreach ($this->bibliotecas as $biblioteca) {
            if ($biblioteca->getNombre() === $nombre) {
                return $biblioteca;
            }
        }
        return null;
    }

    public function getTotalConsultasPorAnio($anio) {
        $total = 0;
        foreach ($this->bibliotecas as $biblioteca) {
            $total += $biblioteca->getConsultasPorAnio($anio);
        }
        return $total;
    }

    public function getPromedioConsultas() {
        $totalConsultas = 0;
        $totalAnios = 3 * count($this->bibliotecas);  // 3 años por biblioteca
        foreach ($this->bibliotecas as $biblioteca) {
            $totalConsultas += $biblioteca->getTotalConsultas();
        }
        return $totalConsultas / $totalAnios;
    }

    public function mostrarMatriz() {
        echo "<table border='1'>";
        echo "<tr><th>Biblioteca</th><th>2021</th><th>2022</th><th>2023</th></tr>";
        foreach ($this->bibliotecas as $biblioteca) {
            echo "<tr>";
            echo "<td>{$biblioteca->getNombre()}</td>";
            foreach ($biblioteca->getConsultas() as $anio => $consultas) {
                echo "<td>{$consultas}</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    }
}
?>
