
function actualizar(precio, id, cantidador) {
   
    
    cant = prompt("por favor digite la cantidad");
    if (cant > cantidador || cant == 0) {
        alert("Error");
        cant = prompt("por favor digite la cantidad");
    }
    subtotal = precio * cant;
    console.log("Subtotal=", subtotal, " precio=", precio, " cantidad agregada=", cant, " id=", id, " cantidadoriginal=", cantidador);

    location.href = "../factura/añadirfactura.php?sub=" + subtotal + "&& id=" + id + "&& precio=" + precio + "&& cantidad=" + cant + "&& cantidador=" + cantidador;
}

function finalizarcompra(total, ganancia) {
    location.href = "../factura/finalizarcompra.php?ventas=" + total + "& ganancias=" + ganancia;
}