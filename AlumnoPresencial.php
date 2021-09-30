<?php

class AlumnoPresencial {

	private static $diashabiles;
	protected $asistper;

	protected $nombre;
	protected $apellido;
	protected $dni;
	protected $notas;
	protected $inasistencias;

	public function __construct($nombre, $apellido, $dni, $inasistencias, $notas){

		$this->nombre = $nombre;
		$this->apellido = $apellido;
		$this->dni = $dni;
	    $this->inasistencias = $inasistencias;
	    $this->notas = $notas;
	}	

	public static function setDiashabiles($dias) {
	    AlumnoPresencial::$diashabiles = $dias;
	}

	public function getperasist($inasistencias, $diashabiles){
		return 100 - ($inasistencias * 100 ) / $diashabiles;
	}

	public function getNota(){
      $asistmin = 75;
		$asistper = $this->getperasist($this->inasistencias, AlumnoPresencial::$diashabiles);
		if ($asistper >= $asistmin) {
			$totalNotes = 0;
			$notesnumber = count($this->notas);

			foreach ($this->notas as $nota) {
				if ($nota >= 4) {
					$totalNotes += $nota; 
				}else{
					return 1;
				}
			}
			return $totalNotes / $notesnumber;

		}else{
			return 1;
		}

	}
	
    public function getNombreApellido(){
        return $this->nombre . " " . $this->apellido;
    }

     public function getDni(){
        return $this->dni;
    }
    public function __ToString(){
        return "name : ". $this->nombre . " last name: " .$this->apellido. " DNI: ". $this->dni . " final note: " . $this->getNota();
    }

        
}