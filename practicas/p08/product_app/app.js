// JSON BASE A MOSTRAR EN FORMULARIO
var baseJSON = {
    "precio": 0.0,
    "unidades": 1,
    "modelo": "XX-000",
    "marca": "NA",
    "detalles": "NA",
    "imagen": "img/default.png"
  };

// FUNCIÓN CALLBACK DE BOTÓN "Buscar"
function buscarID(e) {
    e.preventDefault();
    // SE OBTIENE EL TEXTO A BUSCAR
    var search = document.getElementById('search').value;

    // SE CREA EL OBJETO DE CONEXIÓN ASÍNCRONA AL SERVIDOR
    var client = getXMLHttpRequest();
    client.open('POST', './backend/read.php', true);
    client.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    client.onreadystatechange = function () {
        // SE VERIFICA SI LA RESPUESTA ESTÁ LISTA Y FUE SATISFACTORIA
        if (client.readyState == 4 && client.status == 200) {
            console.log('[CLIENTE]\n'+client.responseText);

            // SE OBTIENE EL OBJETO DE DATOS A PARTIR DE UN STRING JSON
            let productos = JSON.parse(client.responseText); // ahora es un arreglo de objetos

            // SE VERIFICA SI EL ARREGLO JSON TIENE DATOS
            if(productos.length > 0) {
                // SE CREA UNA PLANTILLA PARA CREAR LA(S) FILA(S) A INSERTAR EN EL DOCUMENTO HTML
                let template = '';
                for(let i=0; i<productos.length; i++) {
                    let descripcion = '';
                    descripcion += '<li>precio: '+productos[i].precio+'</li>';
                    descripcion += '<li>unidades: '+productos[i].unidades+'</li>';
                    descripcion += '<li>modelo: '+productos[i].modelo+'</li>';
                    descripcion += '<li>marca: '+productos[i].marca+'</li>';
                    descripcion += '<li>detalles: '+productos[i].detalles+'</li>';

                    template += `
                        <tr>
                            <td>${productos[i].id}</td>
                            <td>${productos[i].nombre}</td>
                            <td><ul>${descripcion}</ul></td>
                        </tr>
                    `;
                }

                // SE INSERTA LA PLANTILLA EN EL ELEMENTO CON ID "productos"
                document.getElementById("productos").innerHTML = template;
            }
        }
    };
    client.send("search="+search);
}


  // FUNCIÓN CALLBACK DE BOTÓN "Agregar Producto"
function agregarProducto(e) {
    e.preventDefault();

    // SE OBTIENE DESDE EL FORMULARIO EL JSON A ENVIAR
    var productoJsonString = document.getElementById('description').value;
    // SE CONVIERTE EL JSON DE STRING A OBJETO
    var finalJSON = JSON.parse(productoJsonString);
    // SE AGREGA AL JSON EL NOMBRE DEL PRODUCTO
    finalJSON['nombre'] = document.getElementById('name').value;
    // SE OBTIENE EL STRING DEL JSON FINAL
    productoJsonString = JSON.stringify(finalJSON,null,2);
    
    let errors = validarProducto(finalJSON);
          
    if (errors.length > 0) {
      alert('Error,' + errors.join(' '));
      return;
    }
  

    // SE CREA EL OBJETO DE CONEXIÓN ASÍNCRONA AL SERVIDOR
    // SE CREA EL OBJETO DE CONEXIÓN ASÍNCRONA AL SERVIDOR
var client = getXMLHttpRequest();
client.open('POST', './backend/create.php', true);
client.setRequestHeader('Content-Type', "application/json;charset=UTF-8");
client.onreadystatechange = function () {
    // SE VERIFICA SI LA RESPUESTA ESTÁ LISTA Y FUE SATISFACTORIA
    if (client.readyState == 4 && client.status == 200) {
        var response = JSON.parse(client.responseText);
        if (response.status == "success") {
            window.alert("Producto agregado");
        } else {
            window.alert(response.message);
        }
    }
};
client.send(productoJsonString);

}
// SE CREA EL OBJETO DE CONEXIÓN COMPATIBLE CON EL NAVEGADOR
function getXMLHttpRequest() {
    var objetoAjax;

    try{
        objetoAjax = new XMLHttpRequest();
    }catch(err1){
        /**
         * NOTA: Las siguientes formas de crear el objeto ya son obsoletas
         *       pero se comparten por motivos historico-académicos.
         */
        try{
            // IE7 y IE8
            objetoAjax = new ActiveXObject("Msxml2.XMLHTTP");
        }catch(err2){
            try{
                // IE5 y IE6
                objetoAjax = new ActiveXObject("Microsoft.XMLHTTP");
            }catch(err3){
                objetoAjax = false;
            }
        }
    }
    return objetoAjax;
}

function init() {
    /**
     * Convierte el JSON a string para poder mostrarlo
     * ver: https://developer.mozilla.org/es/docs/Web/JavaScript/Reference/Global_Objects/JSON
     */
    var JsonString = JSON.stringify(baseJSON,null,2);
    document.getElementById("description").value = JsonString;
}
function validarProducto(producto) {
    let errores = [];
  
    if (!producto.nombre || producto.nombre.length > 100) {
      errores.push(' el campo nombre no puede estar vacío o debe ser menor a 100 caracteres. ');
    }
  
    if (!producto.marca) {
      errores.push(' la marca no puede estar vacía. ');
    }
  
    if (!producto.modelo || !/^[a-zA-Z0-9\-]+$/.test(producto.modelo) || producto.modelo.length > 25) {
      errores.push(' el modelo no puede estar vacío, debe ser texto alfanumérico y no puede exceder los 25 caracteres. ');
    }
  
    if (!producto.precio || parseFloat(producto.precio) <= 99.99) {
      errores.push(' el precio no puede estar vacío y debe ser mayor a 99.99. ');
    }
  
    if (producto.detalles && producto.detalles.length > 250) {
      errores.push(' los detalles deben tener menos de 250 caracteres. ');
    }
  
    if (!producto.unidades || parseInt(producto.unidades) <= 0) {
      errores.push(' las unidades no pueden estar vacías y deben ser mayores o iguales a 0. ');
    }
  
    return errores;
  }