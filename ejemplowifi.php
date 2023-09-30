<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["dato"])) {
        $dato = $_POST["dato"];
        
        // Realiza la lógica para determinar la respuesta
        if ($dato == "1") {
            $respuesta = "4";
        } elseif ($dato == "2") {
            $respuesta = "5";
        } else {
            $respuesta = "Valor no válido: " . $dato;
        }
        
        // Envía la respuesta al ESP32
        echo $respuesta;
    } else {
        echo "Error: El dato no se ha proporcionado.";
    }
} else {
    echo "Método de solicitud incorrecto. Debes usar POST.";
}
?>
