 function actualizar(id, cantidador, nom) {
    pasword = prompt("por favor digite la contraseña");
    cant = prompt("por favor digite la cantidad");
    location.href = "añadirinventario.php?id=" + id + "&cant=" + cant + "&cantor=" + cantidador + "&nombre=" + nom + "&password=" + pasword; 
} 
function eliminar(id,nom) {
    pasword = prompt("por favor digite la contraseña");
    location.href = "eliminarinventario.php?id=" + id + "&nombre=" + nom + "&password=" + pasword; 
} 
function act_data(id) {
    pasword = prompt("por favor digite la contraseña");
    location.href = "actualizarinventario.php?id=" + id + "&password=" + pasword; 
} 