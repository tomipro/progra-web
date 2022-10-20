<?php
	function cargarForm($frmNombre){
		$formPlantilla="";

		if ($frmNombre == "frmConsulta"){
			$formPlantilla=frmConsulta();
		}
		else{
			$formPlantilla="";
		}


	return $formPlantilla;
}

function frmConsulta(){
	$formPlantilla = <<<MI_FORM
	<form action="01.php" method="post" class="abmForm ">
		<div class="marcoImputs">
			<label>Usuario</label>
			<input type="text" id="usuario" name="usuario" class="textoLargo validar requerido" placeholder="Completar.." title="Introduzca texto..." />
			<span id="nombreError" name="nombreError" class="mensajeError obligatorio">  </span>
		</div>
		<div class="marcoImputs">
			<label>Pass</label>
			<input type="text" id="pass" name="pass" class="textoLargo validar requerido" 
					placeholder="Completar.." title="Introduzca texto..."/>
			<span id="domicilioError" name="domicilioError" class="mensajeError obligatorio"></span>
		</div>
		<div class="marcoImputs">
			<label>Consulta</label>
			<input type="text" id="consulta" name="consulta" class="contenidoFI70 " 
					placeholder="Completar.." title="Introduzca texto..."/>
			<span id="domicilioError" name="domicilioError" class="mensajeError obligatorio"></span>
		</div>

		<div class="botones">
		<div class="marcoBotones">
		
			<input type="submit" id="enviar" name="enviar" value="Enviar" class="boton aceptar" onclick="return confirm('¿Está seguro?')"/>
			
		</div>
	</div>

</form>	

MI_FORM;
return $formPlantilla;

}

?>