# Ejercicio 2

![PHP Version](https://img.shields.io/badge/PHP-8-blue.svg) ![SOLID Principles](https://img.shields.io/badge/Solids-Principles-green.svg) ![Design Pattern](https://img.shields.io/badge/Design%20Pattern-Decorator-orange.svg)

**patrón de diseño Decorator** y los **principios SOLID**.

---

## 🚀 Funcionalidades

- Crear un programa donde sea posible añadir diferentes armas a ciertos personajes de videojuegos.
Debes utilizar al menos dos personajes para este ejercicio.
 Para llevar a cabo esta tarea, aplica el patrón de diseño Decorator.

---

## 🛠️ Tecnologías

- **PHP 8**: Lenguaje base del proyecto.
- **Patrón Decorator**: 
- **Principios Decorator**: Permite añadir funcionalidades adicionales a un objeto sin modificar su estructura. Utiliza composición para envolver un objeto con otras clases que agregan o modifican su comportamiento.

## 📜 Cómo Usar

**Ejecuta el archivo principal**:

php ej3_patronDecorator.php

**Diagrama UML**:

![ej3](https://github.com/user-attachments/assets/fdc0ad4b-9cea-4710-ab9b-1b0e61d1d3e6)



---
**Script PHP 8**:
```php
<?php 

/*
Ejercicio 3:

Crear un programa donde sea posible añadir diferentes armas a ciertos personajes
 de videojuegos. Debes utilizar al menos dos personajes para este ejercicio.
Para llevar a cabo esta tarea, aplica el patrón de diseño Decorator.
*/

//interfaz para los persoanjes
interface Personaje {
    public function getDescripcion(): string;
}

// Clase concreta para el personaje Guerrero
class Guerrero implements Personaje {
    public function getDescripcion(): string {
        return "Guerrero";
    }
}

// Clase concreta para el personaje Mago
class Mago implements Personaje {
    public function getDescripcion(): string {
        return "Mago";
    }
}

// Clase abstracta Decorador
abstract class ArmaDecorator implements Personaje {
    protected $personaje;

    public function __construct(Personaje $personaje) {
        $this->personaje = $personaje;
    }

    abstract public function getDescripcion(): string;
}

// Clase concreta para el arma Espada
class Espada extends ArmaDecorator {
    public function getDescripcion(): string {
        return $this->personaje->getDescripcion() . " con Espada";
    }
}

// Clase concreta para el arma Vara
class Vara extends ArmaDecorator {
    public function getDescripcion(): string {
        return $this->personaje->getDescripcion() . " con Vara";
    }
}

// Ejemplo de uso
$guerrero = new Guerrero();
$guerreroConEspada = new Espada($guerrero);
echo $guerreroConEspada->getDescripcion() . PHP_EOL; // Guerrero con Espada

$mago = new Mago();
$magoConVara = new Vara($mago);
echo $magoConVara->getDescripcion() . PHP_EOL; // Mago con Vara

?>

```
---
## 📝 Ejemplo de Salida

### Consola:


![ej_3](https://github.com/user-attachments/assets/64c67cdf-525d-43a3-9295-3ffbc1865827)



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
