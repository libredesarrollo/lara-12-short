<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
# Laravel CRUD – Curso Rápido

Este repositorio **lara-12-short** está diseñado como un tutorial práctico y conciso para construir un sistema CRUD (Crear, Leer, Actualizar, Eliminar) utilizando el framework **Laravel**.

---

##  Recursos en video

Este curso en video te guía paso a paso en la construcción de un CRUD básico con Laravel:


::contentReference[oaicite:0]{index=0}


También puedes seguir la playlist completa con todos los episodios y ejemplos en acción:

**Playlist de referencia:**  
https://www.youtube.com/playlist?list=PLB5SYDBi8M3Ed-dzhGu_Conz-vOC3bG8b

---

##  Contenido del repositorio

Este proyecto estructura un CRUD funcional con Laravel siguiendo los pasos enseñados en los videos:

- `app/`  
  Contiene los controladores principales, incluyendo rutas y lógica para manejar las operaciones CRUD.

- `models/` (o `app/Models/`)  
  Define los modelos de Eloquent, preparados para interactuar con la base de datos.

- `resources/views/`  
  Plantillas *Blade* para visualizar listados, formularios, detalles, edición y eliminación de registros.

- `routes/web.php`  
  Declaración de rutas RESTful para cada operación del CRUD (index, create, store, show, edit, update, destroy).

- `database/migrations/`  
  Migraciones para crear y estructurar las tablas necesarias en la base de datos.

- Otros archivos:  
  - `composer.json`, `.env.example`  
  - Configuración común de Laravel y dependencias necesarias.

---

##  Instalación y ejecución rápida

```bash
# 1. Instala dependencias del proyecto
composer install

# 2. Duplica y configura entorno
cp .env.example .env
php artisan key:generate

# 3. Configura tu base de datos en .env

# 4. Ejecuta migraciones para crear tablas
php artisan migrate

# 5. Levanta el servidor local
php artisan serve


If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
