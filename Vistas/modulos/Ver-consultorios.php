


<div class="content-wrapper">
	<section class="content-header">
		<h1>elija consultorio</h3>
	</section>

	<section class="content">
		<div class="content">
			<div class="box">
		<div class="box-body">

		<?php
		 $columna=null;  //traigo valores nullos //
		 $valor=null;   //traigo valores nullos //

		 $resultado =ConsultoriosC::VerConsultoriosC($columna,$valor);
		 foreach ($resultado as $key =>$value){
			 echo '
			 <div class="col-lg-3 col-xs-6">
			 
			 <!-- small box -->
			 <div class="small-box bg-gray">
			   <div class="inner">
			   <h3>'.$value["nombre"].'</h3>';

			   $columna="id_consultorio";
			   $valor=$value["id"];

			   $doctores=DoctoresC::VerDoctoresC($columna,$valor);

			   foreach ($doctores as $key => $value) {
				   echo '<a href="index.php?url=Doctor/'.$value["id"].'" 
				   style="color:black";><p>'.$value["apellido"].''.$value["nombre"].'
				   </p></a>';
			   }

			   
			  echo' </div>
			 
			  
			 </div>
		   </div>';
			
		 }
		?>


	
				</div>
			</div>
		</div>

	</section>
</div>