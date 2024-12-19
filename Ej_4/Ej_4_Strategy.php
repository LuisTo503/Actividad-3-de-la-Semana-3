<?php 
/*
Tenemos un sistema donde mostramos mensajes en distintos tipos de salida,
como por consola, formato JSON y archivo TXT. 
Debes crear un programa donde se muestren todos estos tipos de salidas.
Para este propósito, aplica el patrón de diseño Strategy.
*/

//Interfaz define la Estrategia de salida
interface Salida {
    public function mostrarMensaje(string $mensaje): void;
}

// Estrategia concreta para mostrar mensajes en consola
class Consola implements Salida {
    public function mostrarMensaje(string $mensaje): void {
        echo "Mensaje en consola: $mensaje" . PHP_EOL;
    }
}

// Estrategia concreta para mostrar mensajes en formato JSON
class JSONSalida implements Salida {
    public function mostrarMensaje(string $mensaje): void {
        echo json_encode(["mensaje" => $mensaje], JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) . PHP_EOL;
    }
}

// Estrategia concreta para guardar mensajes en un archivo TXT
class ArchivoTXT implements Salida {
    private $archivo;
    private array $mensajes = [];

    public function __construct(string $archivo) {
        $this->archivo = $archivo;
    }

    public function mostrarMensaje(string $mensaje): void {
        // Agregar mensaje al buffer
        $this->mensajes[] = $mensaje;
    }

    public function guardarMensajes(): void {
        // Guardar todos los mensajes de una sola vez
        $contenido = implode(PHP_EOL, $this->mensajes) . PHP_EOL;
        file_put_contents($this->archivo, $contenido, FILE_APPEND | LOCK_EX);
        echo "Todos los mensajes han sido guardados en el archivo TXT: $this->archivo" . PHP_EOL;
    }
}

// Contexto que utiliza las estrategias
class GestorMensajes {
    private Salida $salida;

    // Establece la estrategia de salida
    public function setSalida(Salida $salida): void {
        $this->salida = $salida;
    }

    // Envía el mensaje utilizando la estrategia actual
    public function enviarMensaje(string $mensaje): void {
        $this->salida->mostrarMensaje($mensaje);
    }
}

// Crear mensajes y probar las estrategias
$gestor = new GestorMensajes();
$mensajes = [
    "Hola, mundo!",
    "Aplicando principios SOLID.",
    "PHP 8 es Aburrido .",
    "Estamos aprendiendo patrones de diseño.",
    "El patrón Strategy es poderoso.",
    "Este es un mensaje de prueba.",
    "Usa interfaces para desacoplar el código.",
    "Escribe código limpio y mantenible.",
    "La programación orientada a objetos es esencial.",
    "Finalizando el ejercicio con éxito."
];

// Mostrar mensajes en consola
$gestor->setSalida(new Consola());
foreach ($mensajes as $mensaje) {
    $gestor->enviarMensaje($mensaje);
}

// Mostrar mensajes en formato JSON
echo "Salida de los mensajes en formato JSON:\n" . PHP_EOL;
$gestor->setSalida(new JSONSalida());
foreach ($mensajes as $mensaje) {
    $gestor->enviarMensaje($mensaje);
}

// Guardar mensajes en un archivo TXT
$archivoSalida = "mensajes.txt";
$archivoTXT = new ArchivoTXT($archivoSalida);
$gestor->setSalida($archivoTXT);
foreach ($mensajes as $mensaje) {
    $gestor->enviarMensaje($mensaje);
}
// Guardar todos los mensajes de una vez
$archivoTXT->guardarMensajes();

?>
