<?php

/*
Crear un programa que contenga dos personajes: "Esqueleto" y "Zombi".
Cada personaje tendrá una lógica diferente en sus ataques y velocidad. 
La creación de los personajes dependerá del nivel del juego:
- En el nivel fácil se creará un personaje "Esqueleto".
- En el nivel difícil se creará un personaje "Zombi".
Debes aplicar el patrón de diseño Factory para la creación de los personajes.

*/

//Interfaz Personaje
//Creamos la Interfaz Personaje: y tendra dos metodos: atacar() y moverse().
//La interfaz es una abstraccion, ello no tiene logica, solo declara:
// qué métodos deben implementarse.
interface Personaje {
    public function atacar(): string; //declara el metodo publico atacar()
    public function moverse(): string; //declara el metodo publico moverse()
}

//clases concretas
class Esqueleto implements Personaje {
    public function atacar(): string {
        return "Esqueleto lanza un hueso.";
    }

    public function moverse(): string {
        return "Esqueleto se mueve rápido!";
    }

}

class Zombi implements Personaje {
    public function atacar(): string {
        return "Zombi muerde al Esqueleto";
    }

    public function moverse():string {
        return "Zombi se mueve lento.";
    }
}

//clase Factory
class PersonajeFactory {
    public static function crearPersonaje(string $nivel): Personaje {
        return match ($nivel) {
            'facil' => new Esqueleto(),
            'dificil'=> new Zombi(),
            default=> throw new InvalidArgumentException("Nivel no válido"),
        };
    }
}


//Programa
$nivel = readline("Seleccionar el nivel del juego (fácil o díficil): ");

try {
    $personaje = PersonajeFactory::crearPersonaje($nivel);
    echo $personaje->atacar() . PHP_EOL;
    echo $personaje->moverse() . PHP_EOL;
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . PHP_EOL;
}
