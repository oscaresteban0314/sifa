function balance(ventas, ganancias) {
    pasword = prompt("por favor digite la contraseña");
    location.href = "reiniciarbalance.php?password=" + pasword + "&ganancias=" + ganancias + "&ventas=" + ventas; 
} 