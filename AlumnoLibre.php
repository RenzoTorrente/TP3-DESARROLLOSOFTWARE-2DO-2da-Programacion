<?php

class AlumnoLibre {

	protected $nombre;
	protected $apellido;
	protected $dni;
	protected $nota;

	public function __construct($nombre, $apellido, $dni, $nota){

		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->dni = $dni;
	    $this->nota = $nota;
	}

	
    public function getNombreApellido(){
        return $this->nombre . " , " . $this->apellido;
    }

     public function getDni(){
        return $this->dni;
    }
    public function __ToString(){
        return 'name: '. $this->nombre . 'last name :' .$this->apellido. ' DNI: ' . $this->dni . 'final note: ' . $this->nota;
    }
    public function getNota(){
        return $this->nota;
    }
    
}