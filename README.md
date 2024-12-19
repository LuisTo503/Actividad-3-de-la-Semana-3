# Actividad-3-de-la-Semana-3


![PHP Version](https://img.shields.io/badge/PHP-8-blue.svg) ![SOLID Principles](https://img.shields.io/badge/SOLID-Principles-green.svg) ![Design Pattern](https://img.shields.io/badge/Design%20Pattern-Strategy-orange.svg)

### Nombre de la Actividad
Guía de ejercicios patrones de diseño

---

### 🚀 Funcionalidades

- **Para esta actividad tendrá que realizar 4 ejercicios sobre patrones de diseño en PHP.
- **Aplica el patrón de diseño que se te indique en cada ejercicio, resolviéndolos con php.

---

## 🛠️ Tecnologías

- **PHP 8**: Lenguaje base del proyecto.
- **Patrón Factory**:
- **Patrón Adapter**:
- **Patrón Decorator**:
- **Patrón Strategy**: Para encapsular el comportamiento de las salidas.
- **Principios SOLID**: Garantizan un diseño limpio y escalable.

---

## 📂 Estructura del Proyecto

```
├── Actividad-3-de-la-Semana-3
│   ├── Ej_1
│   │   └── ej1_PatronFactory.php
│   ├── Ej_2
│   │   ├── ej2_conversionFicheros
│   ├── Ej_3
│   │   ├── ej3_patronDecorator.php
│   ├── Ej_4
│   │   ├── Ej_4_Strategy.php
├── README.md

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
[LinkedIn](https://www.linkedin.com/in/luis-tobar-79129944/)) | [GitHub](https://github.com/LuisTo503)

---

¡Gracias por revisar este proyecto! 😊
