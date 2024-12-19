# Sistema de Mensajes con el Patrón Strategy

![PHP Version](https://img.shields.io/badge/PHP-8-blue.svg) ![SOLID Principles](https://img.shields.io/badge/SOLID-Principles-green.svg) ![Design Pattern](https://img.shields.io/badge/Design%20Pattern-Strategy-orange.svg)

Este proyecto implementa un sistema que muestra mensajes en diferentes formatos de salida (consola, JSON y archivo TXT), aplicando el **patrón de diseño Strategy** y los **principios SOLID**.

---

## 🚀 Funcionalidades

- **Salida en consola**: Muestra los mensajes directamente en la consola.
- **Salida en formato JSON**: Convierte los mensajes a formato JSON.
- **Salida en archivo TXT**: Guarda los mensajes en un archivo de texto.

---

## 🛠️ Tecnologías

- **PHP 8**: Lenguaje base del proyecto.
- **Patrón Strategy**: Para encapsular el comportamiento de las salidas.
- **Principios SOLID**: Garantizan un diseño limpio y escalable.

---

## 📂 Estructura del Proyecto

```
├── src
│   ├── interfaces
│   │   └── SalidaInterface.php
│   ├── clases
│   │   ├── ConsolaSalida.php
│   │   ├── JSONSalida.php
│   │   ├── TXTSalida.php
│   ├── GestorMensajes.php
├── mensajes.txt
├── README.md
└── index.php
```

---

## 📜 Cómo Usar

1. **Clona el repositorio**:

   ```bash
   git clone https://github.com/tu_usuario/sistema-mensajes.git
   cd sistema-mensajes
   ```

2. **Ejecuta el archivo principal**:

   ```bash
   php index.php
   ```

3. **Resultados esperados**:

   - Mensajes en consola.
   - Mensajes en formato JSON.
   - Mensajes guardados en un archivo `mensajes.txt`.

---

## 📝 Ejemplo de Salida

### Consola:
```
Mensaje en consola: Hola, mundo!
Mensaje en consola: Aplicando principios SOLID.
...
```

### JSON:
```json
{
    "mensaje": "Hola, mundo!"
}
{
    "mensaje": "Aplicando principios SOLID."
}
...
```

### Archivo TXT:
```
Hola, mundo!
Aplicando principios SOLID.
...
```

---

## ⚙️ Principios SOLID Aplicados

1. **Responsabilidad Única (SRP)**: Cada clase tiene una única responsabilidad, como manejar mensajes o definir un tipo de salida.
2. **Abierto/Cerrado (OCP)**: Las clases son extensibles sin modificar su código existente.
3. **Sustitución de Liskov (LSP)**: Las clases que implementan `SalidaInterface` pueden sustituirse sin alterar el comportamiento.
4. **Segregación de Interfaces (ISP)**: La interfaz `SalidaInterface` contiene solo los métodos necesarios.
5. **Inversión de Dependencia (DIP)**: `GestorMensajes` depende de abstracciones y no de implementaciones concretas.

---

## 🌟 Contribuciones

¡Las contribuciones son bienvenidas! Si tienes ideas para mejorar este proyecto:

1. Realiza un fork del repositorio.
2. Crea una nueva rama para tu funcionalidad.
3. Envía un pull request con una descripción detallada.

---

## 📄 Licencia

Este proyecto está bajo la licencia MIT. Consulta el archivo [LICENSE](LICENSE) para más información.

---

## 👨‍💻 Autor

**Tu Nombre**  
Desarrollador apasionado por el diseño limpio y las buenas prácticas.  
[LinkedIn](https://www.linkedin.com) | [GitHub](https://github.com/tu_usuario) | [Portafolio](https://tuportafolio.com)

---

¡Gracias por revisar este proyecto! 😊
