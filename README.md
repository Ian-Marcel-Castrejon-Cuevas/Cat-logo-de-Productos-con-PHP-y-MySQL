# Catálogo de Productos con PHP y MySQL

Aplicación web desarrollada con **PHP, MySQL, HTML y Bootstrap** que permite mostrar un listado de productos almacenados en una base de datos.

## Descripción

El sistema consulta la tabla **producto** de una base de datos MySQL y muestra la información en una tabla dentro de la página web.

Cada producto incluye:

* ID del producto
* Imagen
* Nombre
* Cantidad en stock
* Precio

Las imágenes se almacenan en la base de datos y se muestran en la página utilizando **codificación Base64**.

## Funcionalidades

* Conexión a base de datos MySQL mediante PHP.
* Consulta de productos almacenados.
* Visualización de productos en una tabla dinámica.
* Mostrar imágenes almacenadas en la base de datos.
* Navegación entre páginas como **comprar**, **ingresar** y **nosotros**.

## Tecnologías utilizadas

* PHP
* MySQL
* HTML5
* CSS3
* Bootstrap
* JavaScript

## Estructura del proyecto

```text
catalogo-productos
 ├── index.php
 ├── acceso.php
 ├── comprar.php
 ├── ingresar.php
 ├── nosotros.html
 └── css
     └── caja.css
```

## Funcionamiento

El sistema se conecta a la base de datos mediante el archivo `acceso.php`, realiza una consulta a la tabla **producto** y muestra los registros obtenidos dentro de una tabla en la interfaz web.

## Autor

Ian Marcel Castrejón Cuevas
Ingeniería en Sistemas Computacionales
