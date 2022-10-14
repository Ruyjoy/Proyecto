
function MostrDatos(datos){
    alert(datos);
    d=datos.split('||');
    
 $('#idu').val(d['id_producto']);
 $('#nombreu').val(d['nombre_producto']);
 $('#preciou').val(d['precio_producto']);
 $('#fotou').val(d['imagen_producto']);
 $('#desu').val(d['des_producto']);
}
