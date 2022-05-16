<?php

  class Modelo {
  
    private $con;
    private $id;
    private $titulo;
    private $fecha;
    private $temporadas;
    private $puntuacion;
    private $argumento;
    private $plataforma;
    private $poster;

    public function __construct() {
      $this->con = new mysqli('localhost', 'root' , '', 'misseries');
    }

    public function getSeries() {

      $query = $this->con->query("SELECT * FROM serie");

      while ($row = $query->fetch_array(MYSQLI_ASSOC)) {
        $series[] = $row;
      }

      return $series;
    }

    public function getGeneros() {

      $query = $this->con->query("SELECT genero FROM genero");

      while ($row = $query->fetch_array()) {
        $generos[] = $row;
      }

      return $generos;
    }

    public function getId() {return $this->id;}
    public function setId($id) {$this->id = $id;}

    public function getTitulo() {return $this->titulo;}
    public function setTitulo($titulo) {$this->titulo = $titulo;}

    public function getFecha() {return $this->fecha;}
    public function setFecha($fecha) {$this->fecha = $fecha;}

    public function getTemporadas() {return $this->temporadas;}
    public function setTemporadas($temporadas) {$this->temporadas = $temporadas;}

    public function getPuntuacion() {return $this->puntuacion;}
    public function setPuntuacion($puntuacion) {$this->puntuacion = $puntuacion;}

    public function getArgumento() {return $this->argumento;}
    public function setArgumento($argumento) {$this->argumento = $argumento;}

    public function getPlataforma() {return $this->plataforma;}
    public function setPlataforma($plataforma) {$this->plataforma = $plataforma;}

    public function getPoster() {return $this->poster;}
    public function setPoster($poster) {$this->poster = $poster;}
  }
  
?>