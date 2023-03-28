var baseJSON = {
    "precio": 0.0,
    "unidades": 1,
    "modelo": "XX-000",
    "marca": "NA",
    "detalles": "NA",
    "imagen": "img/default.png"
};
function init() {
    /**
     * Convierte el JSON a string para poder mostrarlo
     * ver: https://developer.mozilla.org/es/docs/Web/JavaScript/Reference/Global_Objects/JSON
     */
    var JsonString = JSON.stringify(baseJSON,null,2);
    document.getElementById("description").value = JsonString;

    // SE LISTAN TODOS LOS PRODUCTOS
}

$('#search').keyup(function(){

//if($('#search').val()){
    var search = $('#search').val();

    var listproducts = () => {
        $.ajax({
            type: 'GET',
            url: 'buscarProductos.php',
            data: { search },
            success: function(data){
               // console.log(data);
               var productos = JSON.parse(data);
               var template = '';
                    var template_bar = '';
                
    
                    productos.forEach(producto => {
        
                        var descripcion = '';
                        descripcion += '<li>precio: '+producto.precio+'</li>';
                        descripcion += '<li>unidades: '+producto.unidades+'</li>';
                        descripcion += '<li>modelo: '+producto.modelo+'</li>';
                        descripcion += '<li>marca: '+producto.marca+'</li>';
                        descripcion += '<li>detalles: '+producto.detalles+'</li>';
                        descripcion += '<li>eliminado: '+producto.eliminado+'</li>';
                        template += `
                            <tr productId="${producto.id}">
                                <td>${producto.id}</td>
                                <td>${producto.nombre}</td>
                                <td><ul>${descripcion}</ul></td>
                                <td>
                                    <button class="product-delete btn btn-danger" onclick="eliminarProducto()">
                                        Eliminar
                                    </button>
                                </td>
                            </tr>
                        `;
    
                   //     template_bar += `
                        //    <li>${producto.nombre}</il>
                    //    `;
    
                        $('#container').html(template);
                       // console.log(data);
                    });
            }
        })
    };
    
    $(document).ready(function($){
        listproducts();
        
    });
//}  


})

$('#task-form').submit(function(e){

    let nombre = $('#name').val();
    let decripcion = $('#description').val();
    let precio = baseJSON.precio;
    
    var descripcion = '';
    descripcion += '<li>precio: '+baseJSON.precio+'</li>';
    descripcion += '<li>unidades: '+baseJSON.unidades+'</li>';
    descripcion += '<li>modelo: '+baseJSON.modelo+'</li>';
    descripcion += '<li>marca: '+baseJSON.marca+'</li>';
    descripcion += '<li>detalles: '+baseJSON.detalles+'</li>';
    descripcion += '<li>imagen: '+baseJSON.imagen+'</li>';
    


    e.preventDefault();
})

