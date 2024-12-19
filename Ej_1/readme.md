# Ejercicio 1

![PHP Version](https://img.shields.io/badge/PHP-8-blue.svg) ![SOLID Principles](https://img.shields.io/badge/SOLID-Principles-green.svg) ![Design Pattern](https://img.shields.io/badge/Design%20Pattern-Factory-orange.svg)

Este proyecto implementa un sistema que muestra mensajes en diferentes formatos de salida (consola, JSON y archivo TXT), aplicando el **patrón de diseño Factory** y los **principios SOLID**.

---

## 🚀 Funcionalidades

- **	
Crear un programa que contenga dos personajes: "Esqueleto" y "Zombi". Cada personaje tendrá una lógica diferente en sus ataques y velocidad. La creación de los personajes dependerá del nivel del juego:
- En el nivel fácil se creará un personaje "Esqueleto".
- En el nivel difícil se creará un personaje "Zombi".
Debes aplicar el patrón de diseño Factory para la creación de los personajes.

---

## 🛠️ Tecnologías

- **PHP 8**: Lenguaje base del proyecto.
- **Patrón Factory**: 
- **Principios SOLID**: Garantizan un diseño limpio y escalable.


## 📜 Cómo Usar

**Ejecuta el archivo principal**:

php ej1_PatronFactory.php

**Diagrama UML**:


![Ejercicio1_PatronFactory](https://github.com/user-attachments/assets/1e2c5b0a-e098-4fe7-b28b-c1d439afa15b)

---
**Script PHP 8**:
```php
<?php
// Clase ejemplo para mostrar mensajes
class Ejemplo {
    public function mostrarMensaje($mensaje) {
        echo $mensaje;
    }
}

$ejemplo = new Ejemplo();
$ejemplo->mostrarMensaje("¡Hola, mundo!");
?>

---
## 📝 Ejemplo de Salida

### Consola:

![ej1_PatronFactory](https://github.com/user-attachments/assets/6a291fa1-052b-422e-9599-41d3b964b6d6)



## ⚙️ Principios SOLID Aplicados

1. **Responsabilidad Única (SRP)**: Cada clase tiene una única responsabilidad, como manejar mensajes o definir un tipo de salida.
2. **Abierto/Cerrado (OCP)**: Las clases son extensibles sin modificar su código existente.
3. **Sustitución de Liskov (LSP)**: Las clases que implementan `SalidaInterface` pueden sustituirse sin alterar el comportamiento.
4. **Segregación de Interfaces (ISP)**: La interfaz `SalidaInterface` contiene solo los métodos necesarios.
5. **Inversión de Dependencia (DIP)**: `GestorMensajes` depende de abstracciones y no de implementaciones concretas.

---




## 👨‍💻 Autor

**Luis Roalndo Tobar**  


---

¡Gracias por revisar este proyecto! 😊
