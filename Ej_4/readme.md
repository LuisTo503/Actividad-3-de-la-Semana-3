# Ejercicio 4

![PHP Version](https://img.shields.io/badge/PHP-8-blue.svg) ![SOLID Principles](https://img.shields.io/badge/Solids-Principles-green.svg) ![Design Pattern](https://img.shields.io/badge/Design%20Pattern-Strategy-orange.svg)

**patrón de diseño Strategy** y los **principios SOLID**.

---

## 🚀 Funcionalidades

- Crear un programa donde sea posible añadir diferentes armas a ciertos personajes de videojuegos.
Debes utilizar al menos dos personajes para este ejercicio.
 Para llevar a cabo esta tarea, aplica el patrón de diseño Decorator.

---

## 🛠️ Tecnologías

- **PHP 8**: Lenguaje base del proyecto.
- **Patrón Strategy**: 
- **Principios Strategy**: Tenemos un sistema donde mostramos mensajes en distintos tipos de salida, como por consola, formato JSON y archivo TXT. Debes crear un programa donde se muestren todos estos tipos de salidas.
- Para este propósito, aplica el patrón de diseño Strategy.

## 📜 Cómo Usar

**Ejecuta el archivo principal**:

php Ej_4_Strategy.php

**Diagrama UML**:

![Ej_4](https://github.com/user-attachments/assets/134c323e-d1ea-4c55-a3bd-5c522aac09e2)

---
**Script PHP 8**:
```php
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
    "PHP 8 es Aburido .",
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

```
---
## 📝 Ejemplo de Salida

### Consola:
![Ej_4_Strategy](https://github.com/user-attachments/assets/d3a5ca8f-3f49-4388-94c7-7df51d49be99)


## ⚙️ Principios SOLID Aplicados

1. **Responsabilidad Única (SRP)**: Cada clase tiene una única responsabilidad, como manejar mensajes o definir un tipo de salida.
2. **Abierto/Cerrado (OCP)**: Las clases son extensibles sin modificar su código existente.
3. **Sustitución de Liskov (LSP)**: Las clases que implementan `SalidaInterface` pueden sustituirse sin alterar el comportamiento.
4. **Segregación de Interfaces (ISP)**: La interfaz `SalidaInterface` contiene solo los métodos necesarios.
5. **Inversión de Dependencia (DIP)**: `GestorMensajes` depende de abstracciones y no de implementaciones concretas.

---




## 👨‍💻 Autor

**Luis Rolando Tobar**  


---

¡Gracias por revisar este proyecto! 😊
