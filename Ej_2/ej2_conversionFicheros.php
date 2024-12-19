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

