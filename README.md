# Constructly

![Laravel](https://img.shields.io/badge/Laravel-10.x-red)
![Status](https://img.shields.io/badge/status-MVP--planning-blue)
![License](https://img.shields.io/badge/license-MIT-green)

Kanban para constructoras pequeñas y startups de Argentina.

Constructly es una aplicación web desarrollada en **Laravel** que ayuda a empresas de la construcción a organizar obras, coordinar equipos y optimizar materiales.  
Pensada para constructoras de **10 a 30 personas**, ofrece tableros Kanban, control de inventario básico y facturación integrada con **Mercado Pago**, todo desde una interfaz **mobile-friendly** ideal para supervisores en obra.

## How to start

1. Clona el repositorio.
2. Instala las dependencias: `composer install`.
3. Instala los paquetes NPM: `npm install`.
4. Builda los assets: `npm run build` o `npm run dev` en caso de estar en desarrollo.
5. Crea la base de datos: `php artisan migrate`.
6. Crea el usuario administrador: `php artisan db:seed`
7. Inicia la app: `php artisan serve`

```bash
cd your_folder

#https
git clone https://github.com/TomasSorgetti/parcial-laravel.git
#ssh
git clone git@github.com:TomasSorgetti/parcial-laravel.git

cd parcial-laravel

composer install

npm install

npm run build || npm run dev

php artisan migrate

php artisan db:seed

php artisan serve
```

---

## Características principales

-   Tableros Kanban con columnas predefinidas y drag-and-drop.
-   Gestión de tareas con responsable, fecha límite y notas.
-   Usuarios y roles: gerente, supervisor y obrero.
-   Pagos integrados con Mercado Pago (facturación directa por obra).
-   Control de materiales simple (ej. marcos, vidrios, puertas).
-   Acceso móvil adaptado a tablets y celulares.
-   Mapa de obras (Google Maps) para visualizar proyectos activos.
-   Integración con Google Calendar para plazos y entregas.

---

## Diferenciadores

-   **Hecho para Argentina**: integración local con Mercado Pago y facturación en pesos.
-   **Inventario simple y útil**: sin complejidad, solo lo esencial.
-   **Mapa de obras**: gestión visual geolocalizada de proyectos.
-   **Gamificación**: progreso con hitos y motivación del equipo.

---

## Modelo de negocio

-   **Free**: 1 proyecto activo / hasta 3 usuarios.
-   **Plan Pro**: proyectos ilimitados / hasta 30 usuarios.
-   **Plan Empresas**: más de 50 usuarios, precio a medida.

---
