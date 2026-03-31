<?php 

require_once "class/cuenta.php";

$cuenta1 = new cuentaBancaria("12345678", "Juan Perez", "0011223344", "Ahorros", 1500.75);
$cuenta2 = new cuentaBancaria("87654321", "Maria Gomez", "9988776655", "Corriente", 2500.00);

echo "Valor de identicación actual ". $cuenta1-> getIdentificacion();

$cuenta1-> setIdentificacion("11111111");

echo "<br>"."Valor nuevo de identificación ". $cuenta1-> getIdentificacion();

echo "<br>" . $cuenta1-> descripcion();

echo "<br>". "El saldo actual de su cuenta es: ". $cuenta1 -> getSaldo();

$cuenta1 -> ingreso(500);

echo "<br>". "El nuevo saldo de su cuenta es: ". $cuenta1 -> getSaldo();

$cuenta1 -> retiro(200);

echo "<br>". "El saldo después del retiro es: ". $cuenta1 -> getSaldo();