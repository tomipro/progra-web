/*
Ready State:
0: La peticion no se ha inicializado
1: Conexion con el servidor establecida
2: Peticion recibida
3: Procesando Peticion
4: Peticion finalizada y la respuesta esta lista.

Status:
200: ok
404: Pagina no encontrada

https://developer.mozilla.org/es/docs/Web/Guide/AJAX/Getting_Started
http://www.saregune.net/ikasi/hezigune/curso.php?curso=ajax&leccion=ajax_xml_intro

*/

// ============================================================
// FUNCIONES AJAX
// ============================================================
function conectAjax() {
    var httpRequest = false;        		 //	CREA EL OBJETO "AJAX".Que es una instancia de XMLHttpRequest.
    // Esta funcion es generica para cualquier utilidad 
    if (window.XMLHttpRequest) {             // -> Mozilla, Safari, ...
        httpRequest = new XMLHttpRequest();
    } else if (window.ActiveXObject) {       // -> IE
        httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
    }
    return httpRequest;
}

function loadContTextAjax(url, idDest, method = "POST") {
    // url : es la dirección donde se obtiene los datos (el servidor)
    // idDest: es el id de un elemento html donde se escribirán los datos recibido de la url
    // console.log(url); 
    var xhr = conectAjax();                                     // Creo el objeto AJAX     
    if (xhr) {
        xhr.open(method, url, true);                  // false = sincro , true = asincro
        xhr.onreadystatechange = function () {
            if (xhr.readyState != 1) {
                document.body.style.cursor = 'wait';            // SET ESPERA Cursor mouse en espera
                //Otra opción sería: agregar una imagen de espera
                //  en el div (o elemento) donde serán cargado los datos
                //  y así liberar el puntero del mouse
            }
            if (xhr.readyState == 4 && xhr.status == 200) {
                document.body.style.cursor = 'default';        // RESET ESPERA Cursor mouse en normal
                textHTML = xhr.responseText;                   // recupera la respuesta
                setDataIntoNode(idDest, textHTML);              // CARGAR HTML EN DESTINO
            }
        }
        xhr.send(null);
    }
    else {
        console.log('No se pudo instanciar el objeto AJAX!');
    }
}

function loadContTextAjaxForm(url, idDest, idForm, method = "POST") {
    // Envio de datos desde formulario
    // Apartir de los datos que se encuentran en el formulario 'idForm'
    // se obtiene los datos de la 'url' pasandole las claves valor de los input por post o get
    // la respuesta se carga en el nodo html 'idDest'
    //https://developer.mozilla.org/en-US/docs/Learn/Forms/Sending_forms_through_JavaScript
    //CARGAR los datos del formulario
    var formData = getDataForm(idForm);

    //// formData manual
    //formData.append('nombre', 'mariano'); // simula ser el name y el valor del input
    //formData.append('apellido', 'diego'); // simula ser el name y el valor del input 
    var xhr = conectAjax();
    if (xhr) {
        xhr.open(method, url, true);
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                setDataIntoNode(idDest, xhr.responseText)
            }
        }
        xhr.send(formData);
    }
    else {
        console.log('No se pudo instanciar el objeto AJAX!');
    }
}


// ============================================================
// FUNCIONES AUXILIARES
// ============================================================

// ============================================================
// ==== Funciones Auxiliares que no son ajax pero las utilizamos
// ==== para cumplir los objetivos
// ============================================================

function getDataForm(idForm) {
    // obtiene los name y los value de los elementos de un formulario.
    // y retorna un objeto FormData()
    var formData = new FormData();

    //alert("XXX");
    data = document.forms[idForm].getElementsByTagName("input");
    for (let i = 0; i < data.length; i++) {
        if (data[i].name != undefined && data[i].value != undefined)
            if (data[i].type == 'text' || data[i].type == 'password') {
                formData.append(data[i].name, data[i].value);
            }
            else if ((data[i].type == 'checkbox' || data[i].type == 'radio') && data[i].checked) {
                formData.append(data[i].name, data[i].value);
            }
            else if (data[i].type == 'file') {

                formData.append(data[i].name, data[i].files[0]);
            }
    }
    data = document.forms[idForm].getElementsByTagName("select");
    for (let i = 0; i < data.length; i++) {
        if (data[i] != undefined && data[i].type == 'select-one') {
            nombre = data[i].name;
            valor = data[i].options[data[i].selectedIndex].value;
            formData.append(nombre, valor);
        }
        if (data[i] != undefined && data[i].type == 'select-multiple') {
            nombre = data[i].name;
            for (let j = 0; j < data[i].selectedOptions.length; j++) {
                formData.append(nombre, data[i].selectedOptions[j].value);
            }
        }
    }
    return formData;
}

function setDataIntoNode(idDest, textHTML) {
    // Esta función se realiza debido a que hay distintas 
    // formas de asginar html a un nodo.
    // idDest: id del nodo que se le cargarán los datos.
    // textHTML: datos a cargar
    let oElement; // objeto
    let sNameTag; // string
    let elementsReadOnlyInnerHTML; // array donde se almacen los tipos de nodos que no tienen innerHTML
    elementsReadOnlyInnerHTML = ["INPUT", "COL", "COLGROUP",
        "FRAMESET", "HEAD", "HTML",
        "STYLE", "TABLE", "TBODY",
        "TFOOT", "THEAD", "TITLE",
        "TR"
    ];

    if (document.getElementById(idDest)) {
        oElement = document.getElementById(idDest);
        sNameTag = oElement.tagName.toUpperCase();
        //console.log("***"+sNameTag);
        if (elementsReadOnlyInnerHTML.indexOf(sNameTag) == -1) {
            oElement.innerHTML = textHTML;
        }
        else if (sNameTag == 'INPUT') {
            oElement.value = textHTML;
        }
        else if (sNameTag.indexOf("TBODY") != -1) {
            setTBodyInnerHTML(oElement, textHTML);
        }
        else {
            console.log('El elemento destino, cuyo id="' + idDest + '", no posee propiedad "innerHTML" ni "value"!');
        }
    }
    else {
        console.log('El elemento destino, cuyo id="' + idDest + '", no existe!');
    }
}

function setTBodyInnerHTML(tbody, html) {
    // agrega el contenido html en tbody
    var temp = tbody.ownerDocument.createElement('div');
    temp.innerHTML = '<table><tbody id="' + tbody.id + '">' + html + '</tbody></table>';
    tbody.parentNode.replaceChild(temp.firstChild.firstChild, tbody);
}


// ============================================================
// ============================================================





/*
function queryAjax(url,oDestText,method="POST"){	
    // oDestText: es el elemento (OBJETO) que esel hijo a del padre 
    // al que se va a cargar la respuesta

    var xhr=conectAjax();	
    xhr.open(method, url, true);             //false = sincro , true = asincro
    xhr.onreadystatechange = function() { 
        if (xhr.readyState!=1) {
            if (xhr.readyState==4 && xhr.status==200) {
                oDestText.parentNode.innerHTML=xhr.responseText;						
            } 
        }
         // else ...
            // Mientras carga (readyState en 1) elimino la opcion "Selecciona Opcion..." 
            // y pongo una que dice "Cargando..."
            // hacerlo para cuando tarda mucho la respuesta		
    }
    xhr.send(null);
}
*/