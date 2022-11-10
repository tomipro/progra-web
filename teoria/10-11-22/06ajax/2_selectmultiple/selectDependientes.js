//-----------------------------------------------------------------------------------------------------
//CONSTANTES GENERALES

const nombreArchivoPHP="selectDependientesProceso.php";

// Declaro los selects que componen el documento HTML. 
// Su atributo ID debe figurar aqui.
const listadoSelects=new Array();
listadoSelects[0]="pais";           //id de pais
listadoSelects[1]="provincia";      //id de provincias
listadoSelects[2]="departamento";   //id de departamento

const leyendaCargando="Cargando...";  //cuando se esta cargando el select
const leyendaNoDisponibleSeleccion="Selecciona Opci&oacute;n...";//cuando se esta indisponible el select

//-----------------------------------------------------------------------------------------------------


function buscarEnArray(array, dato){
	// Retorna el indice de la posicion donde se encuentra el elemento en el 
    // array o null si no se encuentra
	let i=0;
    res=null;
	while(array[i])	{
		if(array[i]==dato && res == null) 
			res = i;
		i++;
	}
	return res;
}

function resetDependientes(posicionSelectDestino){
		let i=posicionSelectDestino, selectActual=null;
		// Busco todos los selects siguientes al que inicio el evento onChange y 
		//les cambio el estado y deshabilito

		selectActual=document.getElementById(listadoSelects[i]);
        if (selectActual){
            selectActual.disabled=false;
        }
		
		i++;
		while(listadoSelects[i])		{
			//console.log(x +','+listadoSelects[x]);
			selectActual=document.getElementById(listadoSelects[i]);
			
			selectActual.length=0;
			
			var nuevaOpcion=document.createElement("option"); 
			nuevaOpcion.value=0; 
			nuevaOpcion.innerHTML=leyendaNoDisponibleSeleccion;
			selectActual.appendChild(nuevaOpcion);	
			selectActual.disabled=true;
			i++;
		}

}

function cargarSelect(idSelectOrigen){
	var respuesta="";
	// Obtengo la posicion que ocupa el select que debe ser cargado en el array declarado mas arriba
	var posicionSelectDestino=buscarEnArray(listadoSelects, idSelectOrigen)+1;

	//RESETAR LOS SELECT DEPENDIENTES
	resetDependientes(posicionSelectDestino);
	// Obtengo el select que el usuario modifico
	var selectOrigen=document.getElementById(idSelectOrigen);
	// Obtengo la opcion que el usuario selecciono
	var opcionSeleccionada=selectOrigen.options[selectOrigen.selectedIndex].value;
	// Si el usuario eligio la opcion "Seleccione uno", no voy al servidor y pongo los selects 
	//siguientes en estado "Selecciona opcion..."
		// Obtengo el elemento select que debo cargar
		var idSelectDestino=listadoSelects[posicionSelectDestino];
		//var selectDestino=document.getElementById(idSelectDestino);
		var url=nombreArchivoPHP+"?select="+idSelectDestino+"&opcion="+opcionSeleccionada;
        loadContTextAjax(url,idSelectDestino,"get");
		
}
