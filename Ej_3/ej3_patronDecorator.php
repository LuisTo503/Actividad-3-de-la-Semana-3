<?php 

/*
Ejercicio 3:

Crear un programa donde sea posible añadir diferentes armas a ciertos personajes
 de videojuegos. Debes utilizar al menos dos personajes para este ejercicio.
Para llevar a cabo esta tarea, aplica el patrón de diseño Decorator.
*/

//interfaz para los persoanjes
// Interfaz para los personajes
// Interfaz para los personajes
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
