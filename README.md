# CRUD de juegos y consolas

Sistema web para administrar un catálogo de videojuegos y consolas: agregar, consultar, modificar y eliminar registros en una base de datos MySQL.

## Funciones

- Alta, listado, edición y eliminación de juegos.
- Alta, listado, edición y eliminación de consolas.
- Relación de cada juego con su consola.
- Mensajes de confirmación o error después de cada operación.
- Panel de administración con menú de navegación.

## Tecnologías

PHP (programación orientada a objetos con una clase de acceso a datos), MySQL, HTML5 y CSS3.

## Cómo ejecutarlo

1. Instala XAMPP (o cualquier servidor con PHP y MySQL).
2. Copia la carpeta `CRUD2022_TERMINADO` dentro de `htdocs`.
3. Importa `proyecto_juegos.sql` en MySQL (por ejemplo desde phpMyAdmin).
4. Revisa los datos de conexión en `logica/database.php`.
5. Abre `http://localhost/CRUD2022_TERMINADO` en el navegador.

## Estructura

- `logica/database.php`: clase con todas las operaciones de base de datos.
- `logica/proceso_*.php`: procesan los formularios de agregar, modificar y eliminar.
- `mostrar*.php`, `agregar*.php` y `modificar*.php`: vistas de juegos y consolas.

## Próximas mejoras

- Reemplazar las consultas armadas con texto por consultas preparadas.
