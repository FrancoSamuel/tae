<?php
$mysqli = new mysqli("127.0.0.1", "root", "", "juegoseco");
if ($mysqli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
//echo $mysqli->host_info . "\n";
$mysqli->set_charset("utf8");
$res = $mysqli->query("SELECT * FROM participantes");

echo printf("La selección devolvió %d filas.\n", $res->num_rows);

while ($fila = $res->fetch_row()) {
    printf ("%s (%s)\n", $fila[0], $fila[1]);
}

/* liberar el conjunto de resultados */
$res->close();

?>