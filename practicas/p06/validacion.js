function validateForm(){
    /**let x = document.forms["formularioInsertarProductos"]["name", "brand", "model", "price", "details", "units"].value;
    if (x == "") {
      alert("El campo no debe estar vacio");
      return false;
    }
**/
if(document.formularioInsertarProductos.name.value == "" ) {
    alert( "El campo nombre no debe estar vacío" );
    document.myForm.name.focus() ;
    return false;
} 
if(document.formularioInsertarProductos.brand.value == "" ) {
    alert( "El campo marca no debe estar vacío" );
    document.formularioInsertarProductos.brand.focus() ;
    return false;
} 
if(document.formularioInsertarProductos.model.value == "" ) {
    alert( "El campo modelo no debe estar vacío" );
    document.formularioInsertarProductos.model.focus() ;
    return false;
} 
if(document.formularioInsertarProductos.price.value == "" ) {
    alert( "El campo precio no debe estar vacío" );
    document.formularioInsertarProductos.price.focus() ;
    return false;
} 
if(document.formularioInsertarProductos.details.value == "" ) {
    alert( "El campo detalles no debe estar vacío" );
    document.formularioInsertarProductos.details.focus() ;
    return false;
} 
if(document.formularioInsertarProductos.units.value == "" ) {
    alert( "El campo unidades no debe estar vacío" );
    document.formularioInsertarProductos.units.focus() ;
    return false;
} 
  } 

