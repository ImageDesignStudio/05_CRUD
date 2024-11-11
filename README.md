# 05_CRUD

Este proyecto es una aplicación CRUD (Crear, Leer, Actualizar, Eliminar) desarrollada en PHP 8, utilizando la arquitectura MVC (Modelo-Vista-Controlador) y aplicando principios de Programación Orientada a Objetos (POO). 

## Características

- **CRUD completo**: permite crear, leer, actualizar y eliminar registros de manera eficiente.
- **Arquitectura MVC**: separación clara entre la lógica de negocio, la interfaz de usuario y el manejo de datos.
- **Programación Orientada a Objetos**: código modular y mantenible.
- **PHP 8**: aprovecha las nuevas características de PHP 8 para un rendimiento óptimo.

## Tecnologías Utilizadas

- **PHP 8**: Lenguaje principal del proyecto.
- **HTML5 y Bulma CSS**: Para la estructura y el diseño básico. https://bulma.io/documentation/start/installation/
- **Bootstrap 5**: Framework CSS para el diseño responsivo y moderno.
- **JavaScript**: Para mejorar la interactividad de la interfaz de usuario.
- **MySQL**: Base de datos utilizada para almacenar los registros del CRUD. (en la carpeta BD está en el archivo SQL)

## Instalación

1. Clona este repositorio:
   ```bash
   git clone https://github.com/tu_usuario/tu_proyecto.git
   ```
2. Dirígete a la carpeta del proyecto:
   ```bash
   cd tu_proyecto
   ```
3. Configura la base de datos:
   - Importa el archivo `Bd.sql` en tu gestor de base de datos (por ejemplo, phpMyAdmin o MySQL Workbench).
   - Configura los datos de conexión a la base de datos en el archivo de configuración de tu proyecto (por ejemplo, `config/database.php`).

4. Inicia el servidor local:
   ```bash
   php -S localhost:8000 -t public
   ```

## Uso

1. Accede a la aplicación en tu navegador: [http://localhost:8000](http://localhost:8000).
2. Utiliza las opciones de CRUD (Crear, Leer, Actualizar, Eliminar) para gestionar los registros de la base de datos desde la interfaz web.

## Estructura del Proyecto

La estructura principal del proyecto sigue el patrón MVC, lo que permite una separación lógica de los componentes:

- `/app`: Contiene los controladores y modelos.
- `/public`: Carpeta accesible al usuario, contiene los archivos públicos (CSS, JS, index.php).
- `/views`: Archivos de vistas que muestran la interfaz de usuario.
- `/config`: Archivos de configuración, incluidos los de conexión a la base de datos. En este caso ya está listo para instarlo en localhost

## Contribución

Si deseas contribuir a este proyecto, puedes enviar un pull request o contactarme directamente a través del correo electrónico.

## Autor

Este proyecto fue desarrollado por [Image.com.ar](http://www.image.com.ar). Para consultas, puedes contactarnos en:  
📧 **info@image.com.ar**

## Licencia

Este proyecto está bajo la licencia MIT. Consulta el archivo [LICENSE](./LICENSE.txt) para más detalles.