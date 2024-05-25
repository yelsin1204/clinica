<?php

class CitasC{

	//Pedir Cita paciente
	public function EnviarCitaC(){
//si existe el name POST Did //

		if(isset($_POST["Did"])){
			//la base de datos//
			$tablaBD = "citas";
			//recorremos los datos de la cita con su respectivo id Doctor/ //
			$Did = substr($_GET["url"], 7);

			//traemos los datos  del formulario//
			$datosC = array("Did"=>$_POST["Did"], "Pid"=>$_POST["Pid"], "nyaC"=>$_POST["nyaC"], "Cid"=>$_POST["Cid"], "documentoC"=>$_POST["documentoC"], "fyhIC"=>$_POST["fyhIC"], "fyhFC"=>$_POST["fyhFC"]);

			$resultado = CitasM::EnviarCitaM($tablaBD, $datosC);

			if($resultado == true){

				//echo '<script>
				//window.location = "Doctor/"'.$Did.';
			//	</script>';
				header('location:"index.php?url=Doctor&id=/'.$Did.'"');

			}

		}

	}


	

	//Mostrar Citas
	public function VerCitasC(){

		$tablaBD = "citas";

		$resultado = CitasM::VerCitasM($tablaBD);

		return $resultado;

	}




	//Pedir cita como doctor
	public function PedirCitaDoctorC(){

		if(isset($_POST["Did"])){

			$tablaBD = "citas";

			$Did = substr($_GET["url"], 6);

			$datosC = array("Did"=>$_POST["Did"], "Cid"=>$_POST["Cid"], "nombreP"=>$_POST["nombreP"], "documentoP"=>$_POST["documentoP"], "fyhIC"=>$_POST["fyhIC"], "fyhFC"=>$_POST["fyhFC"]);

			$resultado = CitasM::PedirCitaDoctorM($tablaBD, $datosC);

			if($resultado == true){

				echo '<script>

				window.location = "Citas/"'.$Did.';
				</script>';

			}

		}

	}


	
	//borrar eliminar citas//
	public function BorrarC(){

		if(isset($_POST["idDoctor"])){

			$tablaBD = "citas";
			//traemos la url del id //
			$id = substr($_GET["url"], 6);
			$datosC = array("idCita"=>$_POST["idCita"]);
	
			$resultado = CitasM::BorrarCitaM($tablaBD,$id,$datosC);

			if($resultado == true){

			//	echo '<script>
			//	window.location = "http://localhost/clinica/Citas/'.$id.'";

			//	</script>';

				header('location:"index.php?url=Citas&id=/'.$id.'"');

			}

		}

	}


	
}