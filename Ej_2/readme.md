# Ejercicio 2

![PHP Version](https://img.shields.io/badge/PHP-8-blue.svg) ![SOLID Principles](https://img.shields.io/badge/SOLID-Principles-green.svg) ![Design Pattern](https://img.shields.io/badge/Design%20Pattern-Adapter-orange.svg)

**patrón de diseño Adapter** y los **principios SOLID**.

---

## 🚀 Funcionalidades

- **	
Estamos trabajando con distintas versiones de sistemas operativos Windows 7 y Windows 10.
Al compartir archivos como Word, Excel, Power Point, surgen problemas al abrirlos en Windows 10 debido a
la falta de compatibilidad con la versión Windows 7. Debes crear un programa donde Windows 10 pueda
aceptar estos archivos independientemente de que sean de versiones anteriores.
- Para ello, aplica el patrón de diseño Adapter.

---

## 🛠️ Tecnologías

- **PHP 8**: Lenguaje base del proyecto.
- **Patrón Adapter**: 
- **Principios SOLID**: Garantizan un diseño limpio y escalable.


## 📜 Cómo Usar

**Ejecuta el archivo principal**:

php ej2_conversionFicheros.php

**Diagrama UML**:

![ej2](https://github.com/user-attachments/assets/6bfe7951-7f3d-4177-b399-eaffeda06e66)


---
**Script PHP 8**:
```php
<?php
// Clase que representa un fichero generado por Windows 7
class Windows7File
{
    // Propiedad privada para almacenar el nombre del fichero
    private string $filename;

    // Constructor que inicializa el nombre del fichero
    public function __construct(string $filename)
    {
        $this->filename = $filename;
    }

    // Método que simula la obtención del contenido del fichero de Windows 7
    public function getFile(): string
    {
        return "Fichero {$this->filename} creado en Windows 7.";
    }
}

// Clase que representa un lector de ficheros en Windows 10
class Windows10FileReader {
    // Método para leer ficheros compatibles
    public function rearFile(string $fileContent): void {
        // Imprime el contenido del fichero que se está leyendo
        echo "Leyendo fichero en Windows 10: $fileContent\n";
    }
}

// Clase adaptadora que permite la conversión de ficheros de Windows 7 a Windows 10
class FileAdapter {
    // Propiedad privada que almacena una instancia de Windows7File
    private Windows7File $adaptee;

    // Constructor que recibe un objeto de tipo Windows7File
    public function __construct(Windows7File $adaptee) {
        $this->adaptee = $adaptee; // Inicializa la propiedad adaptee
    }

    // Método que convierte el fichero de Windows 7 a un formato que Windows 10 puede leer
    public function convertFile(): string {
        // Obtiene el contenido del fichero de Windows 7
        $originalFile = $this->adaptee->getFile();
        // Devuelve el contenido modificado para indicar que es compatible con Windows 10
        return $originalFile . " (modificado a Windows 10)";
    }
}

// Ejecución del programa
// Se crea una instancia de Windows7File con un nombre de fichero
$windows7File = new Windows7File("documento.docx");

// Se crea un adaptador para convertir el fichero de Windows 7
$fileAdapter = new FileAdapter($windows7File);

// Se crea un lector de ficheros de Windows 10
$windows10Reader = new Windows10FileReader();

// Se lee el fichero convertido utilizando el lector de Windows 10
$windows10Reader->rearFile($fileAdapter->convertFile());
?>
```
---
## 📝 Ejemplo de Salida

### Consola:


![ej2](https://github.com/user-attachments/assets/bf023f81-8cd1-4acd-a127-8d95ceafd3b9)



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
