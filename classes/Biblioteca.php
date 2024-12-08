<?php
class Biblioteca {
    private $nombre;
    private $coleccion;
    private $consultas;

    public function __construct($nombre, $coleccion, $consultas) {
        $this->nombre = $nombre;
        $this->coleccion = $coleccion;
        $this->consultas = $consultas;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getConsultasPorAnio($anio) {
        return $this->consultas[$anio] ?? 0;
    }

    public function getTotalConsultas() {
        return array_sum($this->consultas);
    }

    public function getConsultas() {
        return $this->consultas;
    }
}
?>