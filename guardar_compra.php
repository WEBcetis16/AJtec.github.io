<?php
// Obtiene los datos enviados por la solicitud POST
$data = file_get_contents('php://input');

// Ruta del archivo de texto donde se guardarán las compras
$archivo = 'compras.txt';

// Abre el archivo en modo de escritura al final del archivo
$archivoHandler = fopen($archivo, 'a');

if ($archivoHandler) {
  // Escribe los datos en el archivo
  fwrite($archivoHandler, $data . PHP_EOL);

  // Cierra el archivo
  fclose($archivoHandler);

  // Envía una respuesta para indicar que los datos se han guardado correctamente
  echo 'Datos guardados en el archivo.';
} else {
  // Envía una respuesta en caso de error al abrir el archivo
  echo 'Error al abrir el archivo.';
}
?>